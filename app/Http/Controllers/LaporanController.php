<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Gate;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\Jenis_pengaduan;
use App\Models\User;

class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if (Gate::allows('admin')) {

            $daritanggal = $request->dari_tanggal;
            $sampaitanggal = $request->sampai_tanggal;
            $kategori = $request->kategori;
            $cekstatus = $request->cekstatus;


            $laporan = Pengaduan::latest();

            if (request('search')) {
                $laporan->where('id', 'like', '%' . request('search') . '%')
                    ->orWhere('status', 'like', '%' . request('search') . '%')
                    ->orWhere('tanggal_pengaduan', 'like', '%' . request('search') . '%');
            }
            if (request('kategori')) {
                $laporan = Pengaduan::where('jenispengaduan_id', $kategori)->latest();
            }
            if (request('cekstatus')) {
                $laporan = Pengaduan::where('status', $cekstatus)->latest();
            }
            if (request('dari_tanggal')) {
                $laporan = Pengaduan::whereBetween('tanggal_pengaduan', [$daritanggal, $sampaitanggal])->latest();
            }
            return view('admin.laporan.index', [
                'laporan'                => $laporan->get(),
                'jenis_pengaduan'        => Jenis_pengaduan::get(),
                'petugas'           => User::where('role', 'admin')->orWhere('role', 'petugas')->get()
            ]);
        }
        return back();
    }
    public function printlaporan()
    {
        if (Gate::allows('admin')) {

            return view('admin.laporan.printlaporan', [
                'print'     => Pengaduan::all()
            ]);
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if (Gate::allows('admin')) {


            $daritanggal = $request->dari_tanggal;
            $sampaitanggal = $request->sampai_tanggal;
            $kategori = $request->kategori;
            $cekstatus = $request->cekstatus;


            $laporan = Pengaduan::latest();

            if (request('kategori')) {
                $laporan = Pengaduan::where('jenispengaduan_id', $kategori)->latest();
            }
            if (request('cekstatus')) {
                $laporan = Pengaduan::where('status', $cekstatus)->latest();
            }
            if (request('dari_tanggal')) {
                $laporan = Pengaduan::whereBetween('tanggal_pengaduan', [$daritanggal, $sampaitanggal])->latest();
            }
            return view('admin.laporan.printlaporan', [
                'laporan'                => $laporan->get(),
                'jenis_pengaduan'        => Jenis_pengaduan::get(),
                'dari_tanggal'           => $daritanggal,
                'sampai_tanggal'         => $sampaitanggal,
                'kategori'               => $kategori,
                'cekstatus'              => $cekstatus,
                'petugas'           => User::where('role', 'admin')->orWhere('role', 'petugas')->get()
            ]);
        }
        return back();
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
