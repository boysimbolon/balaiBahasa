<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class Mahasiswa extends Model implements AuthenticatableContract
{
    use Authenticatable;

    // Tentukan nama tabel jika berbeda dari konvensi Laravel
    protected $table = 'tm_mhs';
    protected $guarded = 'mahasiswa';
    protected $connection = 'sqlsrv';
    // Kolom yang dapat diisi secara massal
    protected $fillable = ['nim', 'paswd'];

    // Tambahkan atribut yang dapat diakses jika diperlukan
    protected $hidden = ['paswd']; // Jika Anda menggunakan password yang dihash
}
