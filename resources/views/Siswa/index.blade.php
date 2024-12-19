@extends('layouts.app')

@section('title', 'Daftar Siswa')

@section('content')
<div class="d-flex justify-content-between align-items-center">
        <h1>Daftar Siswa</h1>
        <a href="{{ route('siswa.create') }}" class="btn btn-success">Tambah Siswa</a>
    </div>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Jenis Kelamin</th>
                <th>Hobi</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($siswa as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item->nis }}</td>
                    <td>{{ $item->nama }}</td>
                    <td>{{ $item->alamat }}</td>
                    <td>{{ $item->nohp }}</td>
                    <td>{{ $item->jeniskelamin }}</td>
                    <td>{{ $item->hobi }}</td>
                    <td>
                        <a href="{{ route('siswa.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('siswa.destroy', $item->id) }}" method="POST" style="display:inline;">
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
