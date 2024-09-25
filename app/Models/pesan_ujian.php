<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pesan_ujian extends Model
{
    use HasFactory;
    protected $connection='mydb';
    protected $table='pesan_ujian';
    protected $fillable = [
        'id_user',
        'nim',
        'id_ruangan',
        'id_ujian',
        'status'
    ];
    public function ruangan(){
        return $this->belongsTo(list_ruangan::class,'id_ruangan');
    }
    public function ujian(){
        return $this->belongsTo(list_ujian::class,'id_ujian');
    }
    public function history(){
        return $this->hasOne(history::class,'id_pesanan');
    }
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
