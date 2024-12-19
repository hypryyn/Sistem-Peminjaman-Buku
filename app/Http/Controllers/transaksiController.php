<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\siswa;
use App\Models\buku;

class transaksiController extends Controller
{
    public function index()
    {
        $transaksis = transaksi::with('siswa', 'buku')->get();
        return view('transaksi.index', compact('transaksis'));
    }

    public function create()
    {
        $siswas = siswa::all();
        $bukus = buku::all();
        return view('transaksi.create', compact('siswas', 'bukus'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'siswa_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'status' => 'required|in:pinjam,kembali',
        ]);

        transaksi::create($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil ditambahkan');
    }

    public function edit($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $siswas = siswa::all();
        $bukus = buku::all();
        return view('transaksi.edit', compact('transaksi', 'siswas', 'bukus'));
    }
    
    public function show($id)
    {
    // Fetch the transaksi (transaction) by ID
    $transaksi = transaksi::with(['siswa', 'buku'])->findOrFail($id);

    // Pass the transaction data to the 'lihat' view
    return view('transaksi.lihat', compact('transaksi'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'siswa_id' => 'required',
            'buku_id' => 'required',
            'tanggal_pinjam' => 'required|date',
            'status' => 'required|in:pinjam,kembali',
        ]);

        $transaksi = transaksi::findOrFail($id);
        $transaksi->update($request->all());
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil diperbarui');
    }

    public function destroy($id)
    {
        $transaksi = transaksi::findOrFail($id);
        $transaksi->delete();
        return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus');
    }
}
