<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Lib\ReCaptchaAPI;
use App\Models\Contact;
use Session;
use Mail;
use Image;


class ContactController extends Controller
{
    // Display Our Contact Us Page
    public function index()
    {
        return view('contact');
    }

    public function send_mail(Request $request) {
        $imageOneName = "";
        $imageTwo = "";
        $imageThreeName = "";
        $data = $request->all();
        
        if($data["enquiry"] == "complaint"){
            if($data["upload_image"]=="yes"){
                if($request->hasFile("image1")){
                    $image1 = $request->file('image1');
                    $imageOneName = time() . rand() . '.' . $image1->getClientOriginalExtension();
                    $image1->move(public_path('/contactUs/images/'), $imageOneName);
                }
                if($request->hasFile("image2")){
                    $image2 = $request->file('image2');
                    $imageTwo = time() . rand() . '.' . $image2->getClientOriginalExtension();
                    $image2->move(public_path('/contactUs/images/'), $imageTwo);
                }
                if($request->hasFile("image3")){
                    $image3 = $request->file('image3');
                    $imageThreeName = time() . rand() . '.' . $image3->getClientOriginalExtension();
                    $image3->move(public_path('/contactUs/images/'), $imageThreeName);
                }

            }
        }

        $data['image1'] = $imageOneName;
        $data['image2'] = $imageTwo;
        $data['image3'] = $imageThreeName;
        $contact = Contact::create($data);

        $captcha = $data['g-recaptcha-response'];
        $captcha_secret = '6LdCkQIcAAAAAL43Gbc2KmtvnG-f7rN97dkafL-I';
        $verifyCaptcha = ReCaptchaAPI::confirm($captcha_secret, $captcha);

        if($verifyCaptcha) {
            Mail::send('contact_email', array(
                'name' => $data['first_name'].' '. $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone'],
                'content' => $data['content'],
                'enquiry' => $data['enquiry'],
                // 'country' => $data['country'],
                'resturant' => $data['resturant'],
                'dine_take_delivery' => $data['dine_take_delivery'],
            ), function($message) use ($request, $imageOneName, $imageTwo, $imageThreeName){
                $message->from('support@salvafastfood.co.uk' , 'SFF Website');
                $message->to('support@salvafastfood.co.uk', 'Admin')->subject('Salva Fast Food Contact Us');
                if($imageOneName != ''){
                    $message->attach(public_path('/contactUs/images/'.$imageOneName));
                }
                if($imageTwo != ''){
                    $message->attach(public_path('/contactUs/images/'.$imageTwo));
                }
                if($imageThreeName != ''){
                    $message->attach(public_path('/contactUs/images/'.$imageThreeName));
                }
            });
            
            
            Mail::send('user_contact_email', [], function($message) use ($request) {
                $message->from('support@salvafastfood.co.uk', 'Salva Fast Food');
                $message->to($request->email)->subject('Salva Fast Food Contact Us');
            });
        }


        if(is_file(public_path('/contactUs/images/'.$imageOneName))){

            unlink(public_path('/contactUs/images/'.$imageOneName));
        }
        if(is_file(public_path('/contactUs/images/'.$imageTwo))){

            unlink(public_path('/contactUs/images/'.$imageTwo));
        }
        if(is_file(public_path('/contactUs/images/'.$imageThreeName))){

            unlink(public_path('/contactUs/images/'.$imageThreeName));
        }
        Session::flash("success", "Form submitted successfully");
        return redirect()->route('contact');
    }
}
