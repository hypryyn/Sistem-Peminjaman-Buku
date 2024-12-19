<!-- resources/views/transaksi/create.blade.php -->
@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')
<div class="container">
    <h1 class="mb-4">Tambah Transaksi</h1>

    <form action="{{ route('transaksi.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="siswa_id" class="form-label">Siswa</label>
            <select name="siswa_id" id="siswa_id" class="form-select" required>
                <option value="" disabled selected>Pilih Siswa</option>
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}">{{ $siswa->nama }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="buku_id" class="form-label">Buku</label>
            <select name="buku_id" id="buku_id" class="form-select" required>
                <option value="" disabled selected>Pilih Buku</option>
                @foreach ($bukus as $buku)
                    <option value="{{ $buku->id }}">{{ $buku->judul }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="pinjam">Pinjam</option>
                <option value="kembali">Kembali</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
