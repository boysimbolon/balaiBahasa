<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    // Tentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'tm_mhs';
//    protected $guarded = 'mahasiswa';

    // Gunakan pengaturan koneksi database yang sesuai
    protected $connection = 'sqlsrv';

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['nim', 'paswd'];

    // Kolom yang disembunyikan dari hasil array dan JSON
    protected $hidden = ['paswd'];

    // Atur atribut yang harus di-cast jika diperlukan
    protected $casts = [
        // Misalnya, jika ada kolom yang perlu dicasting ke tipe tertentu
    ];
}
