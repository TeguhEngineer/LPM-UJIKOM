<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;

class CetakLaporan extends Controller
{   
    public function index()
    {
        $pengaduan = Pengaduan::latest();
        if (request('search')) {
            $pengaduan->where('id','like','%'.request('search') . '%')
            ->orWhere('jenispengaduan_id','like','%'.request('search') . '%')
            ->orWhere('created_at','like','%'.request('search') . '%');
        }
        return view('admin.laporan.index',[
            'laporan'           =>$pengaduan->get()
        ]);
    }
    public function printlaporan()
    {
        return view('admin.laporan.printlaporan',[
            'print'     =>Pengaduan::all()
        ]);
    }
}
