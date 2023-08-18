<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DineInController extends Controller
{
    public function edit($id)
    {
        $dine_in = DB::table('dine_in_documents')->first();

        return view('dashboard.dine_in.edit', ['dine_in' => $dine_in]);
    }

    public function update(StoreDocumentRequest $request, $id)
    {
        $document = DB::table('dine_in_documents')->where('id', $id)->first();

        if($request->file){

            $document_path = public_path()."/dine_documents/".$document->file;  // Value is not URL but directory file path

            if(File::exists($document_path)) {

                File::delete($document_path);
            }

            $originalFile = $request->file('file');

            $originalFile->move(public_path().'/dine_documents/', $document_file = time().'.'.$originalFile->getClientOriginalExtension());

            $file = DB::table('dine_in_documents')->where('id', $id)->update([
                'title' => $request->title,
                'file' => $document_file
            ]);
        } 

        $file = DB::table('dine_in_documents')->where('id', $id)->update([
            'title' => $request->title
        ]);

        session()->flash('success', 'Document was Updated!');

        return redirect()->route('dineIn.edit', ['id' => $id]);
    }
}
