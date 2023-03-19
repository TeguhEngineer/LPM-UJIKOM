<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Gambar;


class PengaduanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $laporan = Pengaduan::where('status','ditinjau');
      

        if(request('search')) {
            $laporan->where('id', 'like', '%' . request('search') . '%')
            ->orWhere('users_id', 'like', '%' . request('search') . '%')
            ->orWhere('status', 'like', '%' . request('search') . '%')
            ->orWhere('tanggal_pengaduan', 'like', '%' . request('search') . '%');
        }
        
        return view('admin.pengaduan.index',[
            'pengaduan'            =>$laporan->get()
           
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
        //
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
        return view('admin.pengaduan.detailpengaduan',[
            'isipengaduan'              =>Pengaduan::where('id',$id)->first(),
            'gambar'              =>Gambar::where('pengaduan_id', $id)->get()
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
            'status'         =>$request->status,
        ];
        Pengaduan::where('id',$id)->update($ubahdata);
        return redirect('/pengaduan')->with('informasi','Pengaduan berhasil diverifikasi');
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
        return redirect('/pengaduan')->with('informasi','Data Pengaduan berhasil dihapus');
    }
}