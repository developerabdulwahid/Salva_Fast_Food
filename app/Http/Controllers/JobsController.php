<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Job;
class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::with('applications')->get();
        return view('dashboard.jobs',compact('jobs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.create-job');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            // Validate the incoming request data
            $this->validate($request, [
                'title' => 'required|string|max:50',
                'category' => 'required|string|max:50',
                'end_date' => 'required|date|after_or_equal:today',
                'content' => 'nullable|string',
                'image' => 'nullable|image|mimes:jpeg,jpg,png|max:2048', // 2MB limit
            ]);
            // Store the data in the database
            $job = new Job(); // Replace with your actual model class
            $job->id = $random =  rand(1, 1000);
            $job->title = $request->title;
            $job->category = $request->category;
            $job->end_date = $request->end_date;
            $job->description = $request->content;
            // // Handle image upload and save the file path
            if ($request->hasFile('image')) {
                $fileName = $random.'.'.$request->image->extension();  
                $request->image->move(public_path('jobs'), $fileName);
                $job->file = $fileName;      
            }
            $job->save();
            // $yourModel->save();
            return redirect()->route('jobs')->with('success','Job created successfully!');    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $job = Job::findOrFail($id);
        
        $job->applications()->delete();

        if($job->delete()){
            return redirect()->route('jobs')->with('success','Job deleted successfully!');
        }
    }

    public function detail($id){
        $details = Job::where('id',$id)->with('applications')->first();
        return view('dashboard.job-detail',compact('details'));
    }
}

