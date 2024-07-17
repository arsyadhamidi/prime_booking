<?php

namespace App\Http\Controllers\Admin;

use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Kategori;

class AdminLayananController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();
        return view('admin.layanan.index', [
            'layanans' => $layanans,
        ]);
    }

    public function create()
    {
        $kategoris = Kategori::latest()->get();
        return view('admin.layanan.create', [
            'kategoris' => $kategoris,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'kategori_id' => 'required',
            'nama_layanan' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], [
            'nama_layanan.required' => 'Nama Layanan wajib diisi',
            'harga.required' => 'Harga Layanan wajib diisi',
            'deskripsi.required' => 'Dekripsi Layanan wajib diisi',
        ]);

        Layanan::create($validated);

        return redirect('data-layanan')->with('success', 'Anda berhasil menambahkan data');
    }

    public function edit($id)
    {
        $kategoris = Kategori::latest()->get();
        return view('admin.layanan.edit', [
            'layanans' => Layanan::where('id', $id)->first(),
            'kategoris' => $kategoris,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'kategori_id' => 'required',
            'nama_layanan' => 'required',
            'harga' => 'required',
            'deskripsi' => 'required'
        ], [
            'nama_layanan.required' => 'Nama Layanan wajib diisi',
            'harga.required' => 'Harga Layanan wajib diisi',
            'deskripsi.required' => 'Dekripsi Layanan wajib diisi',
        ]);

        Layanan::where('id', $id)->update($validated);

        return redirect('data-layanan')->with('success', 'Anda berhasil memperbaharui data');
    }

    public function destroy($id)
    {
        Layanan::where('id', $id)->delete();

        return redirect('data-layanan')->with('success', 'Anda berhasil menghapus data');
    }
}
