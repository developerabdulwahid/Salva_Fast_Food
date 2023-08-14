<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        $validated = $request->validated();
        $slider = Slider::create($validated);

        if ($request->hasFile('image')) {
            
            $path = $request->file('image')->store('sliders');
            
            $slider->image = $path;
            $slider->save();
        }

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
    public function update(StoreSliderRequest $request, Slider $slider)
    {
        $validated = $request->validated();
        $slider->fill($validated);
        $slider->save();

        if ($request->hasFile('image')) {
            
            $path = $request->file('image')->store('sliders');
            
            if ($slider->image) {
                Storage::delete($slider->image);
                $slider->image = $path;
                $slider->save();
            } else {
                $slider->image = $path;
                $slider->save();
            }
        }

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
        Storage::delete($slider->image);
        $slider->delete();

        session()->flash('success', 'New Slider was Deleted!');

        return redirect()->route('sliders.index');
    }
}
