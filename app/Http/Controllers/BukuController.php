<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\buku;

class BukuController extends Controller
{
    public function index()
    {
        $buku = buku::all();
        return view('buku.index', compact('buku'));
    }

    public function create()
    {
        return view('buku.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'stok' => 'required|integer|min:0',
        ]);

        buku::create($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $buku = buku::findOrFail($id);
        return view('buku.edit', compact('buku'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'judul' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'tahun_terbit' => 'required|integer|digits:4',
            'stok' => 'required|integer|min:0',
        ]);

        $buku = buku::findOrFail($id);
        $buku->update($validatedData);

        return redirect()->route('buku.index')->with('success', 'Buku berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $buku = buku::findOrFail($id);
        $buku->delete();

        return redirect()->route('buku.index')->with('success', 'Buku berhasil dihapus!');
    }
}
