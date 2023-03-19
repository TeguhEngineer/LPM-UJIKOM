<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function masyarakat()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    
    public function administrator()
    {
        return $this->belongsTo(User::class, 'id_pegawai', 'id');
    }
}
