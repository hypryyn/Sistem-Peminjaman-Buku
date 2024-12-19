@extends('layouts.app')

@section('title', 'Report Pinjaman')

@section('content')
<div class="container">
    <h1>Report Pinjaman</h1>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Siswa</th>
                <th>Judul Buku</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transaksis as $transaksi)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $transaksi->siswa->nama }}</td>
                <td>{{ $transaksi->buku->judul }}</td>
                <td>{{ $transaksi->tanggal_pinjam }}</td>
                <td>{{ $transaksi->tanggal_kembali ?? 'Belum Kembali' }}</td>
                <td>{{ ucfirst($transaksi->status) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
