<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Mahasiswa extends Authenticatable
{
    protected $table = 'tm_mhs'; // Nama tabel di database
    protected $connection = 'sqlsrv';
    protected $primaryKey = 'nirm'; // Primary key adalah nim

    public $incrementing = false; // Matikan auto increment

    protected $keyType = 'string'; // Pastikan primary key bertipe string

}

