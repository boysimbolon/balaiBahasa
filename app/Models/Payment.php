<?php

namespace App;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $table = 'payments';
    protected $fillable =[
        'va_created', 'transfer_prove', 'payment_status', 'confirm_at', 'id_user'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'id_user');
    }

    public function registration(){
        return $this->belongsTo(Registration::class, 'id', 'id_payment');
    }
}
