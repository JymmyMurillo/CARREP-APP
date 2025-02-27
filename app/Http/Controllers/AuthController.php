<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('username', 'password');
        

        if (Auth::attempt(['username' => $credentials['username'], 'password' => $credentials['password']])) {
            return redirect()->intended('dashboard');
        }

        return back()->withErrors(['error' => 'El usuario o la contraseña son incorrectos.']);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}