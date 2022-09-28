<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthAdminController extends Controller
{
    public function cek(Request $request)
    {
        $validasidata   = $request->validate([
            'email'         => 'required',
            'password'      => 'required'
        ]);
        if(Auth::attempt($validasidata)){
            $request->session()->regenerate();
            return redirect()->intended('/admin/dashboard');
        }
        return back()->with('error','Username atau password yang anda masukkan salah/ tidak dikenali.!');
    }
}
