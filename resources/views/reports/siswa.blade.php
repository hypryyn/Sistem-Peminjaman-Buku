@extends('layouts.app')

@section('title', 'Report Data Siswa')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Report Data Siswa</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIS</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Jumlah Transaksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($siswas as $key => $s)
                                <tr>
                                    <td>{{ $key + 1 }}</td>
                                    <td>{{ $s->nis }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->alamat }}</td>
                                    <td>{{ $s->transaksis->count() }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="7" class="text-center">Tidak ada data siswa</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
