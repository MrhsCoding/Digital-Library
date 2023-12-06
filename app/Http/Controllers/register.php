<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\QueryException;

class register extends Controller
{
    // admin
    function openRegisterAdmin(){
        return view('admin/registerAdmin');
    }

    function addAdmin(Request $request){
        try {
            // Input Data
            $data = DB::table('users')->insert([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'role' => "admin",
            ]);
            return redirect('/login');
        } catch (QueryException) {
            return redirect('/registerAdmin')->with("error", "Akun sudah terdaftar");
        }
    }

    // petugas
    function addPetugas(Request $request){
        try {
            // Input Data
            $data = DB::table('users')->insert([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'role' => "petugas",
            ]);
            return redirect('/petugas');
        } catch (QueryException) {
            return redirect('/tambahPetugas')->with("error", "Akun sudah terdaftar");
        }
    }
    
    // peminjam
    function openRegisterPeminjam(){
        return view('peminjam/registerPeminjam');
    }
    
    function addPeminjam(Request $request){
        try {
            // Input Data
            $data = DB::table('users')->insertGetId([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'role' => "peminjam",
            ]);
            return redirect('/login');
        } catch (QueryException $errors) {
            return redirect('/registerPeminjam')->with("error", "Akun sudah terdaftar");
        }
    }
    
}