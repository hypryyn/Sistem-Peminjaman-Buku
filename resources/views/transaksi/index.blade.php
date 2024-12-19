@extends('layouts.app')

@section('title', 'Daftar Transaksi')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Transaksi</h1>
    <div class="mb-3">
        <a href="{{ route('transaksi.create') }}" class="btn btn-primary">Tambah Transaksi</a>
    </div>

    @if ($transaksis->isEmpty())
        <div class="alert alert-info">Belum ada transaksi yang tercatat.</div>
    @else
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Siswa</th>
                    <th>Judul Buku</th>
                    <th>Tanggal Pinjam</th>
                    <th>Tanggal Kembali</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($transaksis as $transaksi)
                    <tr>
                        <td>{{ $transaksi->id }}</td>
                        <td>{{ $transaksi->siswa->nama }}</td>
                        <td>{{ $transaksi->buku->judul }}</td>
                        <td>{{ $transaksi->tanggal_pinjam }}</td>
                        <td>{{ $transaksi->tanggal_kembali ?? '-' }}</td>
                        <td>{{ ucfirst($transaksi->status) }}</td>
                        <td>
                            <a href="{{ route('transaksi.show', $transaksi->id) }}" class="btn btn-sm btn-info">Lihat</a>
                            <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-sm btn-warning">Edit</a>
                            <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus transaksi ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
