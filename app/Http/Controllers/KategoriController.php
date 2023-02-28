<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jenis_pengaduan;

class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenis_pengaduan = Jenis_pengaduan::all();

        if(request('search')) {
            $jenis_pengaduan->where('jenis_pengaduan', 'like', '%' . request('search') . '%');
            
        }
        return view('admin.kategori.index',[
            'kategori'      => $jenis_pengaduan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.kategori.tambahkategori');
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
            'jenis_pengaduan'  =>  'required',
            
        ]);
  
        Jenis_pengaduan::create($validateData);
       
        return redirect('/kategori')->with('informasi','Berhasil menambah kategori');
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
        return view('admin.kategori.editkategori',[
            'editkategori'        =>Jenis_pengaduan::where('id',$id)->first()
        ]);
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
            'jenis_pengaduan'         =>$request->jenis_pengaduan,
           
        ];
        Jenis_pengaduan::where('id',$id)->update($ubahdata);
        return redirect('/kategori')->with('informasi','Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jenis_pengaduan::where('id',$id)->delete();
        return redirect('/kategori')->with('informasi','Kategori berhasil dihapus');
    }
}
