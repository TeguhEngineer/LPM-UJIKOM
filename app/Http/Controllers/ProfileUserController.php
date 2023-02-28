<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class ProfileUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.profileuser');
    }
   

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.fotoprofile');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[
        //     'id'        =>'required',
        //     'files'     =>'required'
        // ]);
    
        // $files = $request->file('files');
        // $extension                  =$files->getClientOriginalExtension();
        // $filenamesimpan             ='galleryProfile-' . time().'.'. $extension;
        // $files->move('galleryProfile', $filenamesimpan);
        // User::create([
        //     'id'                =>$request->id,
        //     'foto'              =>$filenamesimpan,
        // ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('user.profileuser',[
            'profileuser'        =>User::where('id',$id)->first(),
            // 'gambar'                =>User::where('id', $id)->get()
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
        return view('user.ubahdata',[
            'editprofileuser'        =>User::where('id',$id)->first()
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
        $datauser = [
            'nama'         =>$request->nama,
            'jk'           =>$request->jk,
            'nik'          =>$request->nik,
            'username'     =>$request->username,
            'email'        =>$request->email,
            'telepon'      =>$request->telepon,
            'alamat'       =>$request->alamat,
        ];
        User::where('id',$id)->update($datauser);
        return back()->with('informasi','Data berhasil diubah');
    }

    // public function updategambar(Request $request, $id)
    // {
    //     $files = $request->file('files');
    // if ($request->hasFile('files')) {
    //     $extension = $files->getClientOriginalExtension();
    //     $fileNameSave = 'galleryCategori' . time() . '.' . $extension;
    //     $files->move(public_path('galleryCategori'), $fileNameSave);
    //     $img = ['url' => $fileNameSave];
    //     $filePic = public_path('galleryCategori/' . $request->picture);
    //     File::delete($filePic);
    //     Categoribarang::where('id', $id)->update($img); 
    // }
    // }

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
