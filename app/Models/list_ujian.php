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
}
