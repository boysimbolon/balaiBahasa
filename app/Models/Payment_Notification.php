<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Payment_Notification extends Model
{
    protected $connection = 'sqlsrv_api';
    protected $table = 'payment_notification';
}
