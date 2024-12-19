@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h1>Edit Buku</h1>
    <form action="{{ route('buku.update', $buku->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" name="judul" id="judul" class="form-control" value="{{ old('judul', $buku->judul) }}">
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" name="penulis" id="penulis" class="form-control" value="{{ old('penulis', $buku->penulis) }}">
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" name="penerbit" id="penerbit" class="form-control" value="{{ old('penerbit', $buku->penerbit) }}">
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="number" name="tahun_terbit" id="tahun_terbit" class="form-control" value="{{ old('tahun_terbit', $buku->tahun_terbit) }}">
        </div>

        <div class="mb-3">
            <label for="stok" class="form-label">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" value="{{ old('stok', $buku->stok) }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
