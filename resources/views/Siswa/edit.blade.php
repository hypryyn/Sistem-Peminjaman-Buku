@extends('layouts.app')

@section('title', 'Edit Siswa')

@section('content')
    <h1>Edit Siswa</h1>
    <form action="{{ route('siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nis" class="form-label">NIS</label>
            <input type="text" name="nis" id="nis" class="form-control" value="{{ old('nis', $siswa->nis) }}">
        </div>

        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" name="nama" id="nama" class="form-control" value="{{ old('nama', $siswa->nama) }}">
        </div>

        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control">{{ old('alamat', $siswa->alamat) }}</textarea>
        </div>

        <div class="mb-3">
            <label for="nohp" class="form-label">No HP</label>
            <input type="text" name="nohp" id="nohp" class="form-control" value="{{ old('nohp', $siswa->nohp) }}">
        </div>

        <div class="mb-3">
            <label for="jeniskelamin" class="form-label">Jenis Kelamin</label>
            <select name="jeniskelamin" id="jeniskelamin" class="form-control">
                <option value="Laki-laki" {{ old('jeniskelamin', $siswa->jeniskelamin) == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ old('jeniskelamin', $siswa->jeniskelamin) == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="hobi" class="form-label">Hobi</label>
            <input type="text" name="hobi" id="hobi" class="form-control" value="{{ old('hobi', $siswa->hobi) }}">
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
