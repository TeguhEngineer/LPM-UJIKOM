<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function pengaduan() {
        return $this->belongsTo(Pengaduan::class,'pengaduan_id', 'id');
    }

    public function users() {
        return $this->belongsTo(User::class,'users_id', 'id');
    }
}