<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
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
            'foto_profile' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], [
            'name.required' => 'Nama Lengkap wajib diisi',
            'email.required' => 'Email Address wajib diisi',
            'email.dns' => 'Email harus memiliki format valid~',
            'emai;.unique' => 'Email wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'foto_profie.required' => 'Foto Profile wajib diisi',
            'foto_profie.mimes' => 'Foto Profile harus memiliki format PNG, JPG, atau JPEG',
            'foto_profie.max' => 'Foto Profile maksimal 2 MB',
        ]);

        if ($request->file('foto_profile')) {
            $validatedData['foto_profile'] = $request->file('foto_profile')->store('foto_profile');
        }else{
            $validatedData['foto_profile'] = null;
        }

        $validatedData['level'] = 'Customer';
        $validatedData['password'] = bcrypt($validatedData['password']);

        $user = User::create($validatedData);

        Pelanggan::create([
            'users_id' => $user->id,
            'nama' => $request->name ?? '-',
            'email' => $request->email ?? '-',
            'telp' => $request->telp ?? '-',
            'alamat' => $request->alamat ?? '-',
            'foto_profile' => $validatedData['foto_profile'] ?? null,
        ]);

        $user->sendEmailVerificationNotification();

        return redirect('/login')->with('success', 'Registrasi Berhasil! Silakan Login');
    }
}
