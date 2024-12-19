@extends('layouts.app')

@section('title', 'Detail Transaksi')

@section('content')
<div class="container">
    <h1 class="mb-4">Detail Transaksi</h1>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title">Transaksi ID: {{ $transaksi->id }}</h5>
            <p class="card-text">
                <strong>Nama Siswa:</strong> {{ $transaksi->siswa->nama }} <br>
                <strong>Judul Buku:</strong> {{ $transaksi->buku->judul }} <br>
                <strong>Tanggal Pinjam:</strong> {{ $transaksi->tanggal_pinjam }} <br>
                <strong>Tanggal Kembali:</strong> {{ $transaksi->tanggal_kembali ?? 'Belum Dikembalikan' }} <br>
                <strong>Status:</strong> {{ ucfirst($transaksi->status) }} <br>
            </p>
            <a href="{{ route('transaksi.index') }}" class="btn btn-secondary">Kembali</a>
        </div>
    </div>
</div>
@endsection
