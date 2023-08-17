<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateFranchiseRequest;
use App\Models\Franchise;
use Illuminate\Http\Request;

class AdminFranchiseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $franchises = Franchise::Latest()->get();

        return view('dashboard.franchises.index', ['franchises' => $franchises]);
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
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function show(Franchise $franchise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function edit(Franchise $franchise)
    {
        return view('dashboard.franchises.edit', ['franchise' => $franchise]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFranchiseRequest $request, Franchise $franchise)
    {
        $franchise->update($request->validated());

        return redirect()->route('franchises.index')->withStatus('success', 'Franchise updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Franchise  $franchise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Franchise $franchise)
    {
        //
    }
}
