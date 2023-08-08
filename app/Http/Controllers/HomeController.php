<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use MongoDB\Driver\Session;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(Request $request)
    {
       
        return view('home');
    }
    
    //Privacy Policy Page
    public function privacy()
    {
        return view('privacy');
    }

    //Cookie Policy Page
    public function cookie()
    {
        return view('cookie');
    }

    //Order Online Page
    public function order()
    {
        $landing_page_links = DB::table('business_settings')->where(['key'=>'landing_page_links'])->first();

        $values =$landing_page_links = (isset($landing_page_links->value)?json_decode($landing_page_links->value, true):null);
        return view('onlineorder')->with('landing_values',$landing_page_links);
    }
    
    // Create Contact Form
    public function createForm(Request $request)
    {
        return view('contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request)
    {

        // Form validation
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'subject' => 'required',
            'message' => 'required'
        ]);

        //  Store data in database
        // Contact::create($request->all());

        // 
        return back()->with('success', 'We have received your message and would like to thank you for writing to us.');
    }
}
