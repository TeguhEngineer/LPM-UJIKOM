<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Redirect;

class DatamasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $masyarakat = User::where('role','masyarakat');
        if(request('search')) {
            $masyarakat->where('id', 'like', '%' . request('search') . '%')
            ->orWhere('nama', 'like', '%' . request('search') . '%')
            ->orWhere('nik', 'like', '%' . request('search') . '%')
            ->orWhere('alamat', 'like', '%' . request('search') . '%');
        }
        return view('admin.datamasyarakat.index',[
            'datamasyarakat'      =>$masyarakat->get(),
            'masyarakat'           =>User::where('id',$request->masyarakat_id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.datamasyarakat.tambahmasyarakat');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
            'alamat'    => 'required|max:255'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/datamasyarakat/create')->with('informasi','Data berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.datamasyarakat.detailmasyarakat',[
            'showmasyarakat'        =>User::where('id',$id)->first()
        ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.datamasyarakat.detailmasyarakat',[
            'showmasyarakat'        =>User::where('id',$id)->first()
        ]) ;
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
        $ubahdata = [
            'nama'         =>$request->nama,
            'jk'           =>$request->jk,
            'username'     =>$request->username,
            'email'        =>$request->email,
            'telepon'      =>$request->telepon,
            'nik'          =>$request->nik,
            'alamat'       =>$request->alamat
        ];
        User::where('id',$id)->update($ubahdata);
        return Redirect::back()->with('informasi','Data berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::where('id',$id)->delete();
        return redirect('/datamasyarakat')->with('informasi','Data Masyarakat berhasil dihapus');
    }
}