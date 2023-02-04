<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function daftar()
    {
        return view('user.daftar');
    }

     public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
            'jk'        => 'required',
            'username'  => 'required|min:3|max:50|unique:users',
            'password'  => 'required|min:5|max:255',
            'email'     => 'required|email:dns|unique:users',
            'telepon'   => 'required|max:13',
            'nik'       => 'required|max:16|unique:users',
            'alamat'    => 'required|max:255',
            'role'      => 'required'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('informasi','Akun berhasil dibuat, silahkan masuk disini!');
    }

    public function login()
    {
        return view('user.login');
    }

}