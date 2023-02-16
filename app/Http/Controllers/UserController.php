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
        return view('user.index');
    }
    public function indexuser()
    {
        return view('user.indexuser',[
            'kategori'          =>Jenis_pengaduan::all(),
            // 'pengaduan'         =>Pengaduan::where('id')->get()
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
            'nik'       => 'required|max:16|unique:users',
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
            return back()->with('loginError','Masuk gagal!');
             
        }

        
    }

    public function pengaduan(Request $request)
    {
        $validateData = $request->validate([
            'users_id'          => 'required',
            'jenispengaduan_id' => 'required',
            'isi_laporan'       => 'required',
            // 'gambar_id'         => 'required',
            'status'            => 'required',
            'created_at'        => 'required'
           
        ]);
        Pengaduan::create($validateData);

        $gambar = Pengaduan::latest()->first();
        
        $files = $request->file('files');
        if ($request->hasfile('files')) {
            $extension                  =$files->getClientOriginalExtension();
            $filenamesimpan             ='galleryPengaduan' . time().'.'. $extension;
            $files->move('galleryPengaduan', $filenamesimpan);
            for ($i=0; $i < 3; $i++) { 
                Gambar::create([
                    'pengaduan_id'    =>$gambar->id,
                    'gambar'        =>$filenamesimpan
                ]);
            }
        }
       
        return redirect('/user')->with('informasi','Pengaduan anda berhasil dikirim');
    }

    

}