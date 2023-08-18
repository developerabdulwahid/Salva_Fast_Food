<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Http\Requests\UpdateSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('dashboard.sliders.index', ['sliders' => $sliders]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.sliders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreSliderRequest $request)
    {
        $slider = new Slider();

        if($request->image){

            $originalFile = $request->file('image');

            $originalFile->move(public_path().'/slider_images/', $slider_file = time().'.'.$originalFile->getClientOriginalExtension());

            $slider->image = $slider_file;

        }

        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->save();

        session()->flash('status', 'New Slider was created!');

        return redirect()->route('sliders.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('dashboard.sliders.edit', ['slider' => $slider]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateSliderRequest $request, Slider $slider)
    {
        if($request->file){
            
            $document_path = public_path()."/slider_images/".$slider->file;  // Value is not URL but directory file path

            if(File::exists($document_path)) {

                File::delete($document_path);
            }

            $originalFile = $request->file('file');

            $originalFile->move(public_path().'/slider_images/', $slider_file = time().'.'.$originalFile->getClientOriginalExtension());

            $slider->file = $slider_file;

        }

        $slider->title = $request->title;
        $slider->content = $request->content;
        $slider->save();



        session()->flash('success', 'New Slider was Updated!');

        return redirect()->route('sliders.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        // Storage::delete($slider->image);
        $image_path = public_path()."/slider_images/".$slider->image;  // Value is not URL but directory file path

        if(File::exists($image_path)) {

            File::delete($image_path);
        }

        $slider->delete();

        session()->flash('success', 'New Slider was Deleted!');

        return redirect()->route('sliders.index');
    }
}
