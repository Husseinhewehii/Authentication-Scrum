<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\UserLogin;
use App\Http\Requests\Auth\UserRegister;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function registerAttempt(UserRegister $request)
    {
        User::create($request->all());
        return redirect()->route('login');
    }

    public function loginAttempt(UserLogin $request)
    {
        return Auth::attempt(['email' => $request->email, 'password' => $request->password]) ? 
        redirect()->route('home'): 
        redirect()->back()->withErrors(["login_failed" => "Credentials are Incorrect"]);
    }

    public function logout()
    {
    	Auth::logout();
    	return redirect(route('home'));
    }
}
