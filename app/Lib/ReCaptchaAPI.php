<?php

namespace App\Lib;

use Illuminate\Support\Facades\Session;

class ReCaptchaAPI
{

  public static function confirm($secretKey, $captcha)
  {
    if(!$captcha) {
        Session::flash('class','error'); 
        Session::flash('message','Please verify that you are not a robot!');
        return FALSE;
    }
    else {
        // post request to server
        $url = 'https://www.google.com/recaptcha/api/siteverify?secret=' . urlencode($secretKey) .  '&response=' . urlencode($captcha);
       // print_r($url);

        $response = file_get_contents($url);
        $responseKeys = json_decode($response,true);
        // should return JSON with success as true

        if($responseKeys["success"]) {
            // send mail
            Session::flash('class','success');
            Session::flash('message','Thanks for your message. It has been sent.');
            return TRUE;
        }
        else {
            Session::flash('class','error');
            Session::flash('message','You are a spammer!');
            return FALSE;
        }
    }
  }
}
