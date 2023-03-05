<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;

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
        if (Gate::allows('admin')) {
            $jenis_pengaduan = Jenis_pengaduan::all();

            if (request('search')) {
                $jenis_pengaduan->where('jenis_pengaduan', 'like', '%' . request('search') . '%');
            }
            return view('admin.kategori.index', [
                'kategori'      => $jenis_pengaduan
            ]);
        }
        return back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Gate::allows('admin')) {
            return view('admin.kategori.tambahkategori');
          
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
        $validateData = $request->validate([
            'jenis_pengaduan'  =>  'required',

        ]);

        Jenis_pengaduan::create($validateData);

        return redirect('/kategori')->with('informasi', 'Berhasil menambah kategori');
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
        if (Gate::allowIf('admin')) {
            
            return view('admin.kategori.editkategori', [
                'editkategori'        => Jenis_pengaduan::where('id', $id)->first()
            ]);
        }
        return back();
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
            'jenis_pengaduan'         => $request->jenis_pengaduan,

        ];
        Jenis_pengaduan::where('id', $id)->update($ubahdata);
        return redirect('/kategori')->with('informasi', 'Kategori berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Jenis_pengaduan::where('id', $id)->delete();
        return redirect('/kategori')->with('informasi', 'Kategori berhasil dihapus');
    }
}
