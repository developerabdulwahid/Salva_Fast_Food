<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\MenuDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MenuDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = MenuDocument::all();
        return view('dashboard.menu_documents.index', ['documents' => $documents]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.menu_documents.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreDocumentRequest $request)
    {
        $validated = $request->validated();
        $slider = MenuDocument::create($validated);

        if ($request->hasFile('file')) {
            
            $path = $request->file('file')->store('documents');
            
            $slider->file = $path;
            $slider->save();
        }

        session()->flash('status', 'New Slider was created!');

        return redirect()->route('documents.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MenuDocument  $menuDocument
     * @return \Illuminate\Http\Response
     */
    public function show(MenuDocument $menuDocument)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MenuDocument  $menuDocument
     * @return \Illuminate\Http\Response
     */
    public function edit(MenuDocument $menuDocument, $id)
    {
        $document = MenuDocument::find($id);
        return view('dashboard.menu_documents.edit', ['document' => $document]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MenuDocument  $menuDocument
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateDocumentRequest $request, MenuDocument $menuDocument, $id)
    {
        $document = MenuDocument::find($id);

        $validated = $request->validated();
        $document->fill($validated);
        $document->save();

        if ($request->hasFile('file')) {
            
            $path = $request->file('file')->store('documents');
            
            if ($document->file) {
                Storage::delete($document->file);
                $document->file = $path;
                $document->save();
            } else {
                $document->file = $path;
                $document->save();
            }
        }

        session()->flash('success', 'New Slider was Updated!');

        return redirect()->route('documents.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MenuDocument  $menuDocument
     * @return \Illuminate\Http\Response
     */
    public function destroy(MenuDocument $menuDocument, $id)
    {
        $document = MenuDocument::find($id);
        Storage::delete($document->file);
        $document->delete();

        session()->flash('success', 'Document was Deleted!');

        return redirect()->route('documents.index');
    }
}
