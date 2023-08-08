<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FranchiseRequest;
use App\Lib\ReCaptchaAPI;
use Mail;
use Session;

class FranchiseController extends Controller
{
    // Display Franchise Page
    public function index() 
    {
        return view('franchise');
    }
    
    public function send_mail(Request $request) {
        $data = $request->all();

        $captcha = $data['g-recaptcha-response'];
        $captcha_secret = '6LdCkQIcAAAAAL43Gbc2KmtvnG-f7rN97dkafL-I';
        $verifyCaptcha = ReCaptchaAPI::confirm($captcha_secret, $captcha);
        if($verifyCaptcha) {
            Mail::send('franchise_email', array(
                'name' => $data['first_name'].' '. $data['last_name'],
                'email' => $data['email'],
                'phone' => $data['phone_with_cc'],
                'country' => $data['country'],
                'hear_about_us' => $data['hear_about_us'],
                'address' => $data['address'],
                'city' => $data['city'],
                'postcode' => $data['postcode'],
                'nationality' => $data['nationality'],
                'everRunOptions' => $data['ever_run_options'],
                'foodExperience' => $data['food_experience'],
                'startOptions' => $data['start_options'],
                'levelOfInvestment' => $data['level_of_investment'],
                'typeOfDevelopmentInterest' => $data['type_of_development_interest'],
                'phoneWithCc' => $data['phone_with_cc'],
                'content' => $data['content'],
            ), function($message) use ($request){
                $message->from('support@salvafastfood.co.uk', 'SFF Website');
                $message->to('support@salvafastfood.co.uk', 'Admin')->subject('Salva Fast Food Franchise Enquiry');
            });
            Mail::send('user_franchise_email', [], function($message) use ($request) {
               
                $message->from('support@salvafastfood.co.uk', 'Salva Fast Food');
                $message->to($request->email)->subject('Salva Fast Food Franchise Enquiry');
                $message->attach(public_path('/attachment/SFF Franchise Application Form.docx'));

            });
        }
        Session::flash("success", "Franchise request successfully sent");
        return redirect()->route('franchise');
    }
}
