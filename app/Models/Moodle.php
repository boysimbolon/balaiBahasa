<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Moodle extends Model
{
    use HasFactory;
    protected $connection = 'mysql';
    protected $table ='mdl_user';
    // Menonaktifkan timestamps
    public $timestamps = false;
    protected $fillable=[
        'confirmed', 'mnethostid', 'username', 'password', 'firstname', 'lastname', 'email', 'city',
        'country'
    ];
}
