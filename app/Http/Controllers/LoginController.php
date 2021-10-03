<?php

namespace App\Http\Controllers;

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($attributes)){
            return redirect('/loginsuccess')->with('success', 'Login Success');
        }

        // throw ValidationException::withMessages([
        //     'email' => 'Email ente tidak terdaftar',
        // ]);
    }
}