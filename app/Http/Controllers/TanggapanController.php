<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tanggapan;
use App\Models\Pengaduan;
use App\Models\Gambar;
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

        if(request('search')) {
            $pengadu->where('id', 'like', '%' . request('search') . '%')
            ->orWhere('users_id', 'like', '%' . request('search') . '%')
            ->orWhere('status', 'like', '%' . request('search') . '%')
            ->orWhere('tanggal_pengaduan','selesai', 'like', '%' . request('search') . '%');
        }
        return view('admin.tanggapan.index',[
            'cekpengaduan'               =>$pengadu->get(),
            
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
            'tanggal_tanggapan'    => 'required'
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
            'lihatpengadu'        =>Pengaduan::where('id',$id)->first(),
            'lihatgambar'        =>Gambar::where('pengaduan_id',$id)->get()
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
            'gambarpengaduan'        =>Gambar::where('pengaduan_id',$id)->get(),
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
        Pengaduan::where('id',$id)->delete();
        return redirect('/tanggapan')->with('informasi','Data Pengaduan berhasil dihapus');
    }
}