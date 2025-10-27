<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function showRegisterForm() {
        return view('auth.register');
    }

    public function register(Request $request) {
        $validated = $request->validate([
            'firstname' => ['required', 'min:2', 'max:100', 'string'],
            'lastname' => ['required', 'min:2', 'max:100', 'string'],
            'email' => ['required', 'email', 'max:100', 'string'],
            'password'=> ['required', 'min:8'],
        ]);
        $validated['password'] = Hash::make($validated['password']);
    
        User::create($validated);

        return redirect()->route('login')->with('success','Register Successfully');
    }
}
