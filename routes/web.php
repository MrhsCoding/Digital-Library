<?php

use App\Http\Controllers\login;
use App\Http\Controllers\register;
use App\Http\Controllers\tampilData;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/registerAdmin', [register::class, 'openRegisterAdmin']);
Route::post('/registerAdmin', [register::class, 'addAdmin']);

Route::get('/registerPeminjam', [register::class, 'openRegisterPeminjam']);
Route::post('/registerPeminjam', [register::class, 'addPeminjam']);

Route::post('/tambahPetugas', [register::class, 'addPetugas']);

Route::get('/login', [login::class, 'openLogin'])->name('login');
Route::post('/login', [login::class, 'checkPrivilage']);
Route::get('/logout', [Login::class, 'logout']);

Route::get('/', function () {
    return view('home');
});

Route::middleware(['cekAdmin'])->group(function () {
    Route::get('/homeAdmin', function () {
        return view('admin/homeAdmin', [
            "title" => "Literasi"
        ]);
    });
    
    Route::get('/peminjam', [tampilData::class, "tampilDataPeminjam"]);

    Route::get('/tambahPetugas', function () {
        return view('admin/tambahPetugas', [
            "title" => "Tambah Petugas"
        ]);
    });

    Route::get('/petugas', [tampilData::class, "tampilDataPetugas"]);
});

Route::middleware(['cekPetugas'])->group(function () {
    Route::get('/homePetugas', function () {
        return view('petugas/homePetugas');
    });
});

Route::middleware(['cekPeminjam'])->group(function () {
    Route::get('/homePeminjam', function () {
        return view('peminjam/homePeminjam');
    }); 
});