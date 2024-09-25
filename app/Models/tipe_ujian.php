<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipe_ujian extends Model
{
    use HasFactory;
    protected $table = 'tipe_ujian';
    protected $connection = 'mydb';
    protected $fillable = [
        'jenis_ujian'
    ];
    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    // Definisikan relasi HasMany ke model list_ujian
    public function listUjian()
    {
        return $this->hasMany(list_ujian::class, 'id_jenis_ujian');
    }
}
