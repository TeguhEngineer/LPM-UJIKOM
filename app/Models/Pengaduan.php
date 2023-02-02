<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function gambarpengaduan() {
        return $this->hasMany(Gambar::class,'gambar_id','id');
    }

    
    public function jenis_pengaduan() {
        return $this->belongsTo(Jenis_pengaduan::class,'jenis_pengaduan_id', 'id');
    }

    public function tanggapan() {
        return $this->hasMany(Tanggapan::class,'pengaduan_id','id');
    }

    
    public function users() {
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}