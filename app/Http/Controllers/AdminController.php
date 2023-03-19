<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
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
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            $role = auth()->user()->role;
            if ($role == "admin") {
                return redirect()->intended('/dashboard');
            } elseif ($role == "petugas") {
                return redirect()->intended('/pengaduan');
            } else {
                return redirect()->intended('/administrator');
            }
        } else {
            return back()->with('loginError', 'Gagal masuk!');
        }
    }

    public function dashboard()
    {
        if (Gate::allows('admin')) {
            $countMasyarakat = User::where('role', 'masyarakat')->count();
            $countPetugas = User::where('role', 'petugas')->count();
            $countPengaduan = Pengaduan::all()->count();
            $countPengaduanDitinjau = Pengaduan::where('status', 'ditinjau')->count();
            $countPengaduanDiproses = Pengaduan::where('status', 'proses')->count();
            $countPengaduanSelesai = Pengaduan::where('status', 'selesai')->count();
            $countTanggapan = Tanggapan::all()->count();

            $tinjau = Pengaduan::where('status', 'ditinjau');
            $diproses = Pengaduan::where('status', 'proses');
            $selesai = Tanggapan::all();
            return view('admin.dashboard.index', [
                'countMasyarakat' => $countMasyarakat,
                'countPetugas'    => $countPetugas,
                'countPengaduan'  => $countPengaduan,
                'countPengaduanditinjau'  => $countPengaduanDitinjau,
                'countPengaduandiproses'  => $countPengaduanDiproses,
                'countPengaduanselesai'  => $countPengaduanSelesai,
                'countTanggapan'  => $countTanggapan,

                'ditinjau'         => $tinjau->get(),
                'diproses'         => $diproses->get(),
                'pengaduanselesai' => $selesai
            ]);
        }
        return back();
       
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/administrator');
    }
}
