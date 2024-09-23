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

}
