<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;
use session;


use App\Models\User;
use App\Models\Pengaduan;
use App\Models\Gambar;
use App\Models\Jenis_pengaduan;


class UserController extends Controller
{
    public function index()
    {
        $countPengaduan = Pengaduan::all()->count();
        return view('user.index',[
            'countPengaduan'    =>$countPengaduan
        ]);
    }
    public function indexuser(Request $request)
    {
       $countPengaduan = Pengaduan::all()->count();

        return view('user.indexuser',[
            'countPengaduan'  => $countPengaduan,
            'kategori'          =>Jenis_pengaduan::all(),
            'riwayat'         =>Pengaduan::where('users_id',auth()->user()->id)->get(),
            
            // 'lihatdetail'   =>Pengaduan::where('id')->get()
        ]);
    }

    public function daftar()
    {
        return view('user.daftar');
    }

     public function store(Request $request)
    {
        $validateData = $request->validate([
            'nama'      => 'required|max:255',
            'jk'        => 'required',
            'username'  => 'required|min:3|max:50|unique:users',
            'password'  => 'required|min:5|max:255',
            'email'     => 'required|email|unique:users',
            'telepon'   => 'required|max:13',
            'nik'       => 'required|min:16|max:16|unique:users',
            'alamat'    => 'required|max:255',
            'role'      => 'required'
        ]);
        $validateData['password'] = bcrypt($validateData['password']);
        User::create($validateData);
        return redirect('/login')->with('informasi','Akun berhasil terdaftar, silahkan masuk disini!');
    }

    public function login()
    {
        return view('user.login');
    }
    public function autentikasi(Request $request)
    {
        $credentials = $request->validate([
            'username'     => 'required',
            'password'     => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            // return redirect()->intended('/dashboard');
            $role = auth ()->user()->role;
            if ($role == "masyarakat") {
                return redirect()->intended('/user');
            } else {
                return redirect()->intended('/login');
            }
                
        } else {
            return back()->with('loginError','Gagal masuk!');
             
        }

        
    }

    public function pengaduan(Request $request)
    {
        $validateData = $request->validate([
            'users_id'          => 'required',
            'jenispengaduan_id' => 'required',
            'isi_laporan'       => 'required',
           
            'status'            => 'required',
            'tanggal_pengaduan'        => 'required'
           
        ]);
        Pengaduan::create($validateData);

        $gambar = Pengaduan::latest()->first();
        
        $files = $request->file('files');

        foreach ($files as $multifiles ) {
            if ($request->hasfile('files')) {
                $name                       = hexdec(uniqid());
                $extension                  = strtolower($multifiles->getClientOriginalExtension());
                $filenamesimpan             = $name.'.'. $extension;
                $multifiles->move('galleryPengaduan', $filenamesimpan);
                    Gambar::create([
                        'pengaduan_id'    =>$gambar->id,
                        'gambar'        =>$filenamesimpan
                    ]); 
            }
        }
        
        return redirect('/user')->with('informasi','Pengaduan anda berhasil dikirim');
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect('/');
    }

    // public function show(Request $request,$id)
    // {
    //     $getpengaduan = Pengaduan::with('jenis_pengaduan')->where('id',$id)->first();
    //     // $gettanggapan = Tanggapan::where('pengaduan_id',$id)->first();
    //     return response()->json(['pengaduan'=>$getpengaduan]);
        
        
    // }
    // public function showtanggapan(Request $request,$id)
    // {
    //     // $getpengaduan = Pengaduan::with('jenis_pengaduan')->where('id',$id)->first();
    //     $gettanggapan = Tanggapan::with('pengaduan')->where('id',$id)->first();
    //     return response()->json(['tanggapan'=>$gettanggapan]);
        
        
    // }

    

    

}