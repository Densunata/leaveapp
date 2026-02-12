<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\UsersTable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // REGISTER PAGE
    public function register()
    {
        return view('auth.register');
    }

    // REGISTER SAVE
    public function registerPost(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);

        UsersTable::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => Hash::make($request->password)
        ]);

        return redirect('/login')->with('success','Account created!');
    }

    // LOGIN PAGE
    public function login()
    {
        return view('auth.login');
    }

    // LOGIN CHECK
    public function loginPost(Request $request)
    {
        $credentials = $request->only('email','password');

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 'HR') {
                return redirect('/hr/dashboard');
            } else {
                return redirect('/employee/dashboard');
            }
        }

        return back()->with('error','Invalid login!');
    }

    // LOGOUT
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }




}

