<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tampilData extends Controller
{
    // petugas
    function tampilDataPetugas(){
        $results = DB::table('users')
            ->select('username', 'email', 'namaLengkap', 'alamat')
            ->where('role', 'petugas')
            ->get();
        $title = "Petugas";
        return view('admin/petugas', [
            "results" => $results,
            "title" => $title
        ]);
    }

    // peminjam
    function tampilDataPeminjam() {
        $results = DB::table('bukus')
            ->join('peminjaman', 'bukus.id', '=', 'peminjaman.id')
            ->join('users', 'peminjaman.id', '=', 'users.id')
            ->select(
                'users.namaLengkap',
                'bukus.judul',
                'peminjaman.tanggalPeminjaman',
                'peminjaman.tanggalPengembalian'
            )
            ->get();
        $title = "peminjam";
        return view('admin/peminjam', [
            "results" => $results,
            "title" => $title
        ]);
    }
}