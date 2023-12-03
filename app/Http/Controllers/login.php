<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class login extends Controller
{
    function openLogin(){
        return view('login');
    }

    function checkPrivilage(Request $request){
        $data = $request->only('username','password');
        if(Auth::attempt($data)){
            $user = Auth::user();
            // dd($user->role);
            // cek privilage
            if($user->role === "admin"){
                return redirect('/homeAdmin');
            }elseif($user->role === "petugas"){
                return redirect('/homePetugas');
            }else{
                return redirect('/homePeminjam');
            }
        }else{
            return redirect('/login')->with("error", "username atau password salah");
        }
    }

    function logout(){
        Auth::logout();
        return redirect('/login');
    }
}