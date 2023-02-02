<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }

    public function daftar()
    {
        return view('admin.daftar');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }
}