<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class data_user extends Model
{
    use HasFactory,Notifiable;
    protected $table = 'data_users';
    protected $fillable = [
        'nama',
        'nik' ,
        'tmpt_lahir' ,
        'tgl_lahir' ,
        'pekerjaan' ,
        'NIDN' ,
        'alamat',
        'jenis_kelamin' ,
        'instansi' ,
        'num_telp' ,
        'email' ,
        'Pendidikan' ,
        'thn_lulus' ,
        'kewarganegaraan' ,
        'pasFoto',
        'ktp',
        'bhs_seharian',
        'no_Peserta'
    ];
}
