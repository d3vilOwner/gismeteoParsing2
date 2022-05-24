<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\RegisterForm;
use App\Http\Requests\LoginForm;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');        
    }

    public function showRegisterForm()
    {
        return view('auth.register');        
    }

    public function registrated()
    {
        return view('sections.registrated');
    }

    public function logout()
    {
        auth('web')->logout();
        return redirect(route('home'));
    }

    public function register(RegisterForm $request)
    {
        $user = User::create($request->validated());
        
        if($user)
        {
            auth('web')->login($user);
        }

        return redirect(route('registrated'));
    }

    public function login(LoginForm $request)
    {
        if(auth('web')->attempt($request->validated())) {
            return redirect(route('registrated'));
        }

        return redirect(route('login'))->withErrors(['email'=>'User not found or data entered not right']);
    }
}
