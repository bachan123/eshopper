<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Session\Session;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.login');
    }

    public function registration()
    {
        return view('backend.registration');
    }

    public function validate_registration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:user',
            'password' => 'required',
            'terms' => 'required'
        ]);

        $data = $request->all();

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
            
        ]);

        return redirect('login')->with('success', 'Registered Successfully');
    }

    public function validate_login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if(Auth::attempt($credentials))
        {
            return redirect('dashboard');
        }

        return redirect('login')->with('error', 'Login Details Are Not Valid!');
    }

    public function dashboard()
    {
        if(Auth::check())
        {
            return view('backend.dashboard');
        }

        return redirect('login')->with('success', 'You Are Not Allowed To Access! ');
    }

    public function logout()
    {
        Auth::logout();
        
        return redirect('login');
    }
}
