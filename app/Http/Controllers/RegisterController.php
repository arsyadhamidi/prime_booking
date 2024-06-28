<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function register()
    {
     return view('auth.register');
    }


    public function store(Request $request)
    {
      $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255',
            'alamat' => 'required',
       ], [
            'name.required' => 'Nama Lengkap wajib diisi',
            'email.required' => 'Email Address wajib diisi',
            'email.dns' => 'Email harus memiliki format valid~',
            'emai;.unique' => 'Email wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
       ]);

       $validatedData['level'] = 'Customer';
       $validatedData['password'] = bcrypt($validatedData['password']);

       $user = User::create($validatedData);

       $user->sendEmailVerificationNotification();

       return redirect('/login')->with('success', 'Registrasi Berhasil! Silakan Login');
    }
}
