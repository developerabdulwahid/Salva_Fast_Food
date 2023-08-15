<?php

namespace App\Http\Controllers;

use App\Models\JobApplication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class JobApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applicants = JobApplication::all();

        return view('dashboard.applicants.index', ['applicants' => $applicants]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jobApplicants($id)
    {
        Session::put('job_id', $id);
        $applicants = JobApplication::where('job_id', $id)->get();

        return view('dashboard.applicants.index', ['applicants' => $applicants]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JobApplication  $applicant
     * @return \Illuminate\Http\Response
     */
    public function show(JobApplication $applicant)
    {
        return view('dashboard.applicants.show', ['applicant' => $applicant]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JobApplication  $applicant
     * @return \Illuminate\Http\Response
     */
    public function edit(JobApplication $applicant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\JobApplication  $applicant
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JobApplication $applicant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JobApplication  $applicant
     * @return \Illuminate\Http\Response
     */
    public function destroy(JobApplication $applicant)
    {
        $applicant->delete();

        return redirect()->route('job.applicants', ['id' => Session::get('job_id')])->withStatus('success', 'Application deleted successfully');
    }
}
