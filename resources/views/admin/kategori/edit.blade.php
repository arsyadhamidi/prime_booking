@extends('admin.layout.master')
@section('menuDataKategori', 'active')
@section('content')
    <div class="row">
        <div class="col-lg">
            <form action="{{ route('data-kategori.update', $kategoris->id) }}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <a href="{{ route('data-kategori.index') }}" class="btn btn-primary">
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
                                    <label>Keterangan Kategori</label>
                                    <textarea name="nama" class="form-control @error('nama') is-invalid @enderror" rows="5"
                                        placeholder="Masukan keterangan kategori">{{ old('nama', $kategoris->nama ?? '-') }}</textarea>
                                    @error('nama')
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
