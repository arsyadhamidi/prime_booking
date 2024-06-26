@extends('admin.layout.master')
@section('menuDataLayanan', 'active')
@section('content')
    <div class="row">
        <div class="col-lg">
            <form action="{{ route('data-layanan.update', $layanans->id) }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('data-layanan.index') }}" class="btn btn-primary">
                            <i class="bx bx-left-arrow-alt"></i>
                            Kembali
                        </a>
                        <button type="submit" class="btn btn-success">
                            <i class="bx bx-save"></i>
                            Simpan Data
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg">
                                <div class="mb-3">
                                    <label>Nama Layanan</label>
                                    <textarea name="nama_layanan" class="form-control @error('nama_layanan') is-invalid @enderror" rows="5"
                                        placeholder="Masukan nama layanan">{{ old('nama_layanan', $layanans->nama_layanan ?? '-') }}</textarea>
                                    @error('nama_layanan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Harga Layanan</label>
                                    <input type="number" name="harga"
                                        class="form-control @error('harga') is-invalid @enderror"
                                        placeholder="Masukan harga layanan" value="{{ old('harga', $layanans->harga ?? '-') }}">
                                    @error('harga_layanan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label>Deskripsi Layanan</label>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" rows="5"
                                        placeholder="Masukan nama layanan">{{ old('deskripsi', $layanans->deskripsi ?? '-') }}</textarea>
                                    @error('deskripsi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
