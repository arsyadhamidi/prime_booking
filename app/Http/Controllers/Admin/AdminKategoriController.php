<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class AdminKategoriController extends Controller
{
    public function index()
    {
        $kategoris = Kategori::latest()->get();
        return view('admin.kategori.index', [
            'kategoris' => $kategoris,
        ]);
    }

    public function create()
    {
        return view('admin.kategori.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ], [
            'nama.required' => 'Nama Kategori wajib diisi',
        ]);

        Kategori::create($validated);

        return redirect('data-kategori')->with('success', 'Anda berhasil menambahkan data');
    }

    public function edit($id)
    {
        return view('admin.kategori.edit', [
            'kategoris' => Kategori::where('id', $id)->first(),
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama' => 'required',
        ], [
            'nama.required' => 'Nama Kategori wajib diisi',
        ]);

        Kategori::where('id', $id)->update($validated);

        return redirect('data-kategori')->with('success', 'Anda berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        Kategori::where('id', $id)->delete();

        return redirect('data-kategori')->with('success', 'Anda berhasil menghapus data');
    }
}
