<?php

namespace App\Http\Controllers;

use App\Lib\ReCaptchaAPI;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Session;
use App\Models\Job;
use App\Models\JobApplication;

class CareerController extends Controller
{
    // Display Careers Page
    public function index() 
    {
        $jobs = Job::get();

        return view('career', compact('jobs'));
    }

    public function send_mail(Request $request) {
        $fileName = '';
        $data = $request->all();
        
        $captcha = $data['g-recaptcha-response'];
        $captcha_secret = '6LdCkQIcAAAAAL43Gbc2KmtvnG-f7rN97dkafL-I';
        $verifyCaptcha = ReCaptchaAPI::confirm($captcha_secret, $captcha);
        if($verifyCaptcha) {
            if ($request->hasFile('resume')) {
                $file =  $request->file('resume');
                $fileName = time().'_'.$file->getClientOriginalName();    
                $file->move(public_path('/cvs/'), $fileName);
            }

            $data['resume'] = $fileName;
            $application = JobApplication::create($data);
            
            Mail::send('career_email', array(
                'name' => $data['fullname'],
                'email' => $data['re-email'],
                'store' => $data['store'],
                'position' => $data['position'],
                'time' => $data['time'],
                'content' => $data['content']
            ), function($message) use ($request, $fileName) {
               
                $message->from('support@salvafastfood.com' , 'SFF Website');
                $message->to('support@salvafastfood.com', 'Admin')->subject('Salva Fast Food New Job Applied');
                if ($fileName != '') {
                    $message->attach(public_path('cvs/'.$fileName));
                }
            });

            Mail::send('customer_job_email', array(
                'name' => $data['fullname'],
                'position' => $data['position'],
                'isCvUpload' => $data['inlineRadioOptions']
            ), function($message) use ($request) {
               
                $message->from('support@salvafastfood.com', 'Salva Fast Food');
                $message->to($request->email, $request->fullname)->subject('Thank you for applying for a job at SFF');
            });
        }

        if(is_file(public_path('/cvs/'.$fileName))){
            unlink(public_path('/cvs/'.$fileName));
        }
        // }
       
        Session::flash("success", "Your Application has been submitted successfully.");
        return redirect()->route('career');
    }

    public function jobDetail(Request $request)
    {
        $job = Job::findOrFail($request->job_id);

        return response()->json($job);
    }

    public function jobApplied(Request $request)
    {
        $job = Job::findOrFail($request->job_id);

        return response()->json($job);
    }
}
