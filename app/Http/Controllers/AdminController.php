<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Echo_;
use session;
use App\Models\User;
use App\Models\Pengaduan;
use App\Models\Tanggapan;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login.index');
    }

    public function autentikasi(Request $request)
    {
        $credentials = $request->validate([
            'username'     => 'required',
            'password'     => 'required'
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            $role = auth ()->user()->role;
            if ($role == "admin") {
                return redirect()->intended('/dashboard');
            } else {
                return redirect()->intended('/administrator');
            }
        } else {
            return back()->with('loginError','Masuk gagal!');
        }       
    }

    public function dashboard()
    {
        $countMasyarakat = User::where('role','masyarakat')->count();
        $countPetugas = User::where('role','petugas')->count();
        $countPengaduan = Pengaduan::all()->count();
        $countTanggapan = Tanggapan::all()->count();
        return view('admin.dashboard.index',[
            'countMasyarakat' => $countMasyarakat,
            'countPetugas'    => $countPetugas,
            'countPengaduan'  => $countPengaduan,
            'countTanggapan'  => $countTanggapan
        ]);
    }

    public function logout()
    {
        Auth::logout(); 
        return redirect('/administrator');
    }

}