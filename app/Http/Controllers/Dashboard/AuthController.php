<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->method() == 'POST') {
            $credentials = $request->only('email', 'password');

            if (auth()->attempt($credentials, request('remember'))) {
                // Authentication passed...
                return redirect()->intended('dashboard');
            } else if(auth('agent')->attempt($credentials, request('remember'))) {
                return redirect()->intended('agent');
            }
            return redirect()->back()->with('error', 'email or password is incorrect');
        } else {
            return view('dashboard.auth.login');
        }
    }

    public function logout()
    {
        auth()->logout();
        return redirect()->route('dashboard.login');
    }
}
