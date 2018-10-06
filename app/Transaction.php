<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    private $table = 'transactions';

    private $fillable = [
        'buyer_id',
        'seller_id',
        'payment_method',
        'verification_code_id',
    ];

    public function post() {
        return $this->hasOne('App\Post');
    }

    public function paymentMethod() {
        return $this->hasOne('App\PaymentMethod');
    }

    public function verificationCode() {
        return $this->hasOne('App\VerificationCode');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
