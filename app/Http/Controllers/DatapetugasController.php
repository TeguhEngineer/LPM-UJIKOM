<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DatapetugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $petugas = User::where('role','petugas');

        if(request('search')) {
            $petugas->where('id', 'like', '%' . request('search') . '%')
            ->orWhere('nama', 'like', '%' . request('search') . '%')
            ->orWhere('username', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%');
        }
        return view('admin.datapetugas.index',[
            'datapetugas'           =>$petugas->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datapetugas.tambahpetugas');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama'      => 'required|max:255',
            'jk'        => 'required',
            'username'  => 'required|min:3|max:50|unique:users',
            'password'  => 'required|min:5|max:255',
            'email'     => 'required|email:dns|unique:users',
            'role'      => 'required'
            
        ]);
        User::create([
            'nama'         =>$request->nama,
            'jk'           =>$request->jk,
            'username'     =>$request->username,
            'password'     =>bcrypt($request->password),
            'email'        =>$request->email,
            'role'         =>$request->role
        ]);
        return redirect('/datapetugas/create')->with('informasi','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}