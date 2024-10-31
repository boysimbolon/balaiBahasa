<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Data_User extends Model
{
    use HasFactory,Notifiable;
    protected $connection = 'mydb';
    protected $table = 'data_users';
    protected $fillable = [
        'nama',
        'nik',
        'va',
        'tmpt_lahir',
        'tgl_lahir',
        'pekerjaan',
        'NIDN',
        'alamat',
        'jenis_kelamin',
        'instansi',
        'num_telp',
        'Pendidikan',
        'thn_lulus',
        'kewarganegaraan',
        'pasFoto',
        'ktp',
        'bhs_seharian',
        'no_Peserta',
        'city',
    ];
}
