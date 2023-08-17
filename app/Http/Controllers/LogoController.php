<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLogoRequest;
use App\Http\Requests\UpdateLogoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class LogoController extends Controller
{
    public function edit($id)
    {
        $logo = DB::table('logos')->first();

        return view('dashboard.logos.edit', ['logo' => $logo]);
    }

    public function update(UpdateLogoRequest $request, $id)
    {
        $logo = DB::table('logos')->where('id', $id)->first();

        if($request->file){

            $logo_path = public_path()."/logo_images/".$logo->file;  // Value is not URL but directory file path

            if(File::exists($logo_path)) {

                File::delete($logo_path);
            }

            $originalFile = $request->file('file');

            $originalFile->move(public_path().'/logo_images/', $logo_file = time().'.'.$originalFile->getClientOriginalExtension());

            $file = DB::table('logos')->where('id', $id)->update([
                'title' => $request->title,
                'file' => $logo_file
            ]);

            session()->flash('success', 'Logo was Updated!');

            return redirect()->route('logo.edit', ['id' => $id]);
        } 

        session()->flash('success', 'Title and logo was Updated!');

        return redirect()->route('logo.edit', ['id' => $id]);
    }
}
