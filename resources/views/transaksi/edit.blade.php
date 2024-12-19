@extends('layouts.app')

@section('title', 'Edit Transaksi')

@section('content')
<div class="container">
    <h1 class="mb-4">Edit Transaksi</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('transaksi.update', $transaksi->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="siswa_id" class="form-label">Nama Siswa</label>
            <select name="siswa_id" id="siswa_id" class="form-select" required>
                <option value="" disabled>Pilih Siswa</option>
                @foreach ($siswas as $siswa)
                    <option value="{{ $siswa->id }}" 
                        {{ $siswa->id == $transaksi->siswa_id ? 'selected' : '' }}>
                        {{ $siswa->nama }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="buku_id" class="form-label">Judul Buku</label>
            <select name="buku_id" id="buku_id" class="form-select" required>
                <option value="" disabled>Pilih Buku</option>
                @foreach ($bukus as $buku)
                    <option value="{{ $buku->id }}" 
                        {{ $buku->id == $transaksi->buku_id ? 'selected' : '' }}>
                        {{ $buku->judul }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="tanggal_pinjam" class="form-label">Tanggal Pinjam</label>
            <input type="date" name="tanggal_pinjam" id="tanggal_pinjam" class="form-control" 
                   value="{{ $transaksi->tanggal_pinjam }}" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_kembali" class="form-label">Tanggal Kembali</label>
            <input type="date" name="tanggal_kembali" id="tanggal_kembali" class="form-control" 
                   value="{{ $transaksi->tanggal_kembali }}">
        </div>

        <div class="mb-3">
            <label for="status" class="form-label">Status</label>
            <select name="status" id="status" class="form-select" required>
                <option value="pinjam" {{ $transaksi->status == 'pinjam' ? 'selected' : '' }}>Pinjam</option>
                <option value="kembali" {{ $transaksi->status == 'kembali' ? 'selected' : '' }}>Kembali</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection
