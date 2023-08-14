<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDocumentRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        if ($request->hasFile('file')) {
            
            $path = $request->file('file')->store('documents');
            
            if ($document->file) {
                Storage::delete($document->file);

                $file = DB::table('dine_in_documents')->where('id', $id)->update([
                    'title' => $request->title,
                    'file' => $path
                ]);
            } else {
                $file = DB::table('dine_in_documents')->where('id', $id)->update([
                    'title' => $request->title,
                    'file' => $path
                ]);
            }
        }

        session()->flash('success', 'Document was Updated!');

        return redirect()->route('dineIn.edit', ['id' => $id]);
    }
}
