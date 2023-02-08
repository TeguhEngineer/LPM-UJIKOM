<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jenis_pengaduan extends Model
{
    use HasFactory;
    protected $fillable=['jenis_pengaduan'];

    public function pengaduan() {
        return $this->hasMany(Pengaduan::class,'jenispengaduan_id','id');
    }
}