<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm() {
        return view('auth.login');
    }
    public function login(Request $request) {   

        $credentials = $request->validate([
            'email' => ['required', 'email', 'string'],
            'password' => ['required', 'min:8'],
        ]);

        if (Auth::attempt($credentials)) {
            
            $request->session()->regenerate();

            if (Auth::user()->role == 1) {
                return redirect()->intended('dashboard');
            }

            return redirect('home');
        }
        
        return back()->withErrors(
            ['email'=> 'The provided records do not match.'
        ])->onlyInput('email');
    }
}
