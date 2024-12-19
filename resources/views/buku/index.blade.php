@extends('layouts.app')

@section('title', 'Daftar Buku')

@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Buku</h1>
        <a href="{{ route('buku.create') }}" class="btn btn-success">Tambah Buku</a>
    </div>
    

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Penulis</th>
                <th>Penerbit</th>
                <th>Tahun Terbit</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($buku as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->judul }}</td>
                    <td>{{ $item->penulis }}</td>
                    <td>{{ $item->penerbit }}</td>
                    <td>{{ $item->tahun_terbit }}</td>
                    <td>{{ $item->stok }}</td>
                    <td>
                        <a href="{{ route('buku.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('buku.destroy', $item->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
