<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::latest()->get();
        return view('admin.user.index', [
            'users' => $users,
        ]);
    }

    public function create()
    {
        return view('admin.user.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ],[
            'name.required' => 'Nama Lengkap wajib diisi',
            'email.required' => 'Email Address wajib diisi',
        ]);

        $validated['password'] = bcrypt('12345678');
        $validated['level'] = 'Customer';

        User::create($validated);

        return redirect('data-user')->with('success', 'Anda berhasil menambahkan data');
    }

    public function edit($id)
    {
        return view('admin.user.edit', [
            'users' => User::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'alamat' => 'required',
        ],[
            'name.required' => 'Nama Lengkap wajib diisi',
            'email.required' => 'Email Address wajib diisi',
        ]);

        $validated['password'] = bcrypt('12345678');
        $validated['level'] = 'Customer';

        User::where('id', $id)->update($validated);

        return redirect('data-user')->with('success', 'Anda berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        User::where('id', $id)->delete();

        return redirect('data-user')->with('success', 'Anda berhasil menghapus data');
    }

}
