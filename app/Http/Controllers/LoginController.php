<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function login()
    {
     return view('auth.login');
    }

    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }else{
            return back()->with('error', 'Email atau Password anda salah');
        }
    }

    public function logout(Request $request): RedirectResponse
    {
          Auth::logout();
          $request->session()->invalidate();
          $request->session()->regenerateToken();
          return redirect('/');
    }
}
