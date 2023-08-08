<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoryController extends Controller
{
    // Display Our Stories Page
    public function index() 
    {
        return view('story');
    }
}
