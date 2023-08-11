<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function showLogin()
    {
        if (Auth::check()) {
            return redirect()->route('admin');
        }

        return view('dashboard.login');
    }

    public function login(Request $request)
    {
        // get the user
        $user = User::where('email', $request->email)->first();

        // check user exists and password is correct
        if ($user && Hash::check($request->password, $user->password)) {
            // 2FA is not enabled

            // log the user in
            Auth::login($user);

            // send them to the homepage
            // return redirect()->route('home');
            return redirect('/admin');
        }
        // invalid "username or password"
        return redirect('/login')->with('error','wrong email or password is given');
    }

    public function logout(Request $request)
    {   
        // log user out
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
    
}
