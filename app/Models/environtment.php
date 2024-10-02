<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class environtment extends Model
{
    use HasFactory;
    protected $table='environtment_ujian';
    protected $connection='mydb';
    protected $fillable=[
        'id_ujian',
        'no_modul',
        'enroll_key'
    ];
    protected $hidden=[
        'created_at',
        'updated_at'
    ];
}
