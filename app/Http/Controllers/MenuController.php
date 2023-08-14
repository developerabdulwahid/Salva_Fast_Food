<?php

namespace App\Http\Controllers;

use App\Models\MenuDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MenuController extends Controller
{
    // Display Menu Page
    public function index() 
    {
        $document = MenuDocument::findOrFail(1)->first();
        $dine = DB::table('dine_in_documents')->where('id', 1)->first();
        return view('menu', ['document' => $document, 'dine' => $dine]);
    }

    public function allergen()
    {
        return view('allergen');
    }
}
