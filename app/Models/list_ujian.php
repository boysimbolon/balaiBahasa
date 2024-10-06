<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_ujian extends Model
{
    use HasFactory;
    protected $table = 'list_ujian';
    protected $connection = 'mydb';
    protected $fillable = [
        'id_jenis_ujian',
        'id_ruangan',
        'tanggal',
        'jam',
        'status'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Definisikan relasi BelongsTo ke model tipe_ujian
    public function tipeUjian()
    {
        return $this->belongsTo(tipe_ujian::class, 'id_jenis_ujian');
    }
    public function listruangan()
    {
        return $this->belongsTo(list_ruangan::class, 'id_ruangan');
    }
    public function environtmentUjian()
    {
        return $this->hasOne(environtment::class, 'id_ujian');
    }
}
