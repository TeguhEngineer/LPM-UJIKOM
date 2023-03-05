<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class DaftarAdmin extends Controller
{
    public function index()
    {
        return view('admin.login.daftar');
    }

    public function daftarAdmin(Request $request)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
            'jk'        => 'required',
            'username'  => 'required|min:3|max:50|unique:users',
            'password'  => 'required|min:5|max:255',
            'email'     => 'required|email|unique:users',
            'role'      => 'required'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/administrator')->with('informasi','Akun admin berhasil terdaftar, silahkan masuk disini!');
    }
}
