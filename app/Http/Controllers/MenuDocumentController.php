<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use App\Http\Requests\UpdateDocumentRequest;
use App\Models\MenuDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;


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

        // if ($request->hasFile('file')) {
            
        //     $path = $request->file('file')->store('documents');
            
        //     $slider->file = $path;
        //     $slider->save();
        // }

        $slider->id = $random =  rand(1, 1000);

        if ($request->hasFile('file')) {
            $fileName = $random.'.'.$request->file->extension();  
            $request->file->move(public_path('menu_documents'), $fileName);
            $slider->file = $fileName;      
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

        if($request->file){

            $document_path = public_path()."/menu_documents/".$document->file;  // Value is not URL but directory file path

            if(File::exists($document_path)) {

                File::delete($document_path);
            }

            $originalFile = $request->file('file');

            $originalFile->move(public_path().'/menu_documents/', $document_file = time().'.'.$originalFile->getClientOriginalExtension());

            $document->file = $document_file;

        }

        $document->title = $request->title;
        $document->content = $request->content;
        $document->save();

        session()->flash('success', 'New document was Updated!');

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
