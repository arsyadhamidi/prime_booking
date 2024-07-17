<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Pelanggan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class LandingProfileController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        $pelanggans = Pelanggan::where('users_id', $users->id)->first();
        return view('frontend.profile.index', [
            'pelanggans' => $pelanggans,
        ]);
    }

    public function edit($id)
    {
        $pelanggans = Pelanggan::where('id', $id)->first();
        return view('frontend.profile.edit', [
            'pelanggans' => $pelanggans,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'telp' => 'required',
            'alamat' => 'required',
            'foto_profile' => 'required|mimes:png,jpg,jpeg|max:2048',
        ], [
            'nama.required' => 'Nama Lengkap wajib diisi',
            'email.required' => 'Email wajib diisi',
            'telp.required' => 'Telepon wajib diisi',
            'alamat.required' => 'Alamat wajib diisi',
            'foto_profile.required' => 'Foto Profile wajib diisi',
            'foto_profile.mimes' => 'Foto Profile harus memiliki format PNG, JPG, atau JPEG',
            'foto_profile.max' => 'Foto Profile maksimal 2 MB',
        ]);

        $pelanggans = Pelanggan::where('id', $id)->first();
        if($request->file('foto_profile')){
            if($pelanggans->foto_profile){
                Storage::delete($pelanggans->foto_profile);
            }

            $validated['foto_profile'] = $request->file('foto_profile')->store('foto_profile');
        }else{
            $validated['foto_profile'] = $pelanggans->foto_profile;
        }

        $pelanggans->update($validated);

        return redirect('/profile')->with('success', 'Selamat ! Anda berhasil memperbaharui data anda');
    }
}
