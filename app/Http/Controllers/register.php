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
        // Validate
        $request->validate(
        [
            'username' => 'required',
            'password' => 'required',
            'email' => 'required|unique:users',
            'namaLengkap' => 'required',
            'alamat' => 'required',
        ]);
    
        // Input Data
        $data = DB::table('users')->insert([
            'username' => $request->username,
            'password' => Hash::make($request->password),
            'email' => $request->email,
            'namaLengkap' => $request->namaLengkap,
            'alamat' => $request->alamat,
            'role' => "admin",
        ]);
    
        if($data){
            return redirect('/login');
        } else {
            return redirect('/registerAdmin')->with("error", "Registrasi ggal");
        }
    }
    
    // peminjam
    function openRegisterPeminjam(){
        return view('peminjam/registerPeminjam');
    }
    
    function addPeminjam(Request $request){
        try {
            // Validate
            $request->validate(
            [
                'username' => 'required',
                'password' => 'required',
                'email' => 'required|unique:users',
                'namaLengkap' => 'required',
                'alamat' => 'required',
            ],
            [
                'username.required' => 'Kolom username harus diisi.',
                'password.required' => 'Kolom password harus diisi.',
                'email.required' => 'Kolom email harus diisi.',
                'namaLengkap.required' => 'Kolom nama lengkap harus diisi.',
                'alamat.required' => 'Kolom alamat harus diisi.',
                'email.email' => 'Format email tidak valid.',
                'email.unique' => 'Email sudah terdaftar.',
            ]
        );
    
            // Input Data
            $data = DB::table('users')->insertGetId([
                'username' => $request->username,
                'password' => Hash::make($request->password),
                'email' => $request->email,
                'namaLengkap' => $request->namaLengkap,
                'alamat' => $request->alamat,
                'role' => "peminjam",
            ]);
    
            // if ($data) {
            //     return redirect('/login');
            // } else {
            //     return redirect('/registerPeminjam')->with("error", "Failed to register.");
            // }
        } catch (QueryException $e) {
            // Handle the exception (e.g., log the error, provide a custom error message)
            // return redirect('/registerPeminjam')->with("error", "An error occurred during registration.");
            echo "gagal";
        }
    }
    
}