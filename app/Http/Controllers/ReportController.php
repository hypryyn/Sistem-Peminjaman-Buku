<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\transaksi;
use App\Models\siswa;

class ReportController extends Controller
{
    /**
     * Display the report for pinjaman (transactions).
     *
     * @return \Illuminate\View\View
     */
    public function reportPinjaman()
    {
        $transaksis = transaksi::with(['siswa', 'buku'])->get();

        return view('reports.pinjaman', compact('transaksis'));
    }

    /**
     * Display the report for data siswa (students).
     *
     * @return \Illuminate\View\View
     */
    public function reportSiswa()
    {
        $siswas = siswa::withCount('transaksis')->get();

        return view('reports.siswa', compact('siswas'));
    }
}
