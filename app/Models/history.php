<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class history extends Model
{
    use HasFactory;
    protected $connection='mydb';
    protected $table='history';
    protected $fillable = [
        'id_user',
        'nim',
        'id_pesanan',
        'skor',
        'nilai1',
        'nilai2',
        'nilai3',
        'nilai4',
        'no_sertificate'
    ];
    public function pesan_ujian(){
        return $this->belongsTo(pesan_ujian::class,'id_pesanan');
    }
    protected $hidden = [
        'created_at',
        'updated_at'
    ];
}
