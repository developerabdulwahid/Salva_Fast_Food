<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    // Display Menu Page
    public function index() 
    {
        return view('menu');
    }

    public function allergen()
    {
        return view('allergen');
    }
}
