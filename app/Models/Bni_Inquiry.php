<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bni_Inquiry extends Model
{
    protected $connection = 'sqlsrv_api';
    protected $table = 'bni_inquiry';
}
