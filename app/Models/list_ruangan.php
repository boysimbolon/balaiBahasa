<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class list_ruangan extends Model
{
    use HasFactory;
    protected $table='list_ruangan';
    protected $connection='mydb';
    protected $fillable=[
        'nama_ruangan',
        'alamat',
        'kapasitas'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
