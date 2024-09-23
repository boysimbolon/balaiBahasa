<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    use HasFactory, Notifiable;

    // Tentukan nama tabel yang digunakan oleh model ini
    protected $table = 'tm_mhs';
    protected $guard ='mhs';
    // Tentukan koneksi database yang digunakan (misalnya SQL Server)
    protected $connection = 'sqlsrv';

    // Kolom yang dapat diisi secara massal
    protected $fillable = ['nim', 'paswd'];

    // Kolom yang disembunyikan dari hasil array dan JSON
    protected $hidden = ['paswd'];

    // Atur atribut yang harus di-cast jika diperlukan
    protected $casts = [
        // 'nim' => 'string', // Contoh casting jika diperlukan
    ];

    /**
     * Karena semua data di tabel ini adalah mahasiswa,
     * metode ini selalu mengembalikan true.
     */
    public function isMahasiswa()
    {
        return true;
    }

    /**
     * Override metode untuk mendapatkan password
     *
     * @return string
     */
    public function getAuthPassword()
    {
        return $this->paswd; // Menggunakan kolom 'paswd' sebagai password
    }
}
