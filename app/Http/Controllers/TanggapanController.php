<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
use App\Models\User;

class TanggapanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pengadu = Pengaduan::where('status','proses')->orWhere('status','selesai');
        return view('admin.tanggapan.index',[
            'cekpengaduan'               =>$pengadu->get(),
            // 'lihattanggapan'             =>Tanggapan::get()
        ]);

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'pengaduan_id'  =>  'required',
            'users_id'      =>  'required',
            'isi_tanggapan' => 'required',
            'created_at'    => 'required'
        ]);
        $status = ['status'=> $request->status];
        Tanggapan::create($validateData);
        Pengaduan::where('id',$request->pengaduan_id)->update($status);
        return redirect('/tanggapan')->with('informasi','Berhasil ditanggapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.tanggapan.lihattanggapan',[
            'lihattanggapan'        =>Tanggapan::where('pengaduan_id',$id)->first(),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        return view('admin.tanggapan.isitanggapan',[
            'isitanggapan'        =>Pengaduan::where('id',$id)->first(),
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
        Tanggapan::where('id',$id)->delete();
        return redirect('/tanggapan')->with('informasi','Data Pengaduan berhasil dihapus');
    }
}