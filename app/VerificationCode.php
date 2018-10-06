<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{

    private $table = 'verification_codes';

    private $fillable = [
        'buyer_code',
        'seller_code',
    ];

    public function transaction() {
        $this->belongsTo('App\Transaction');
    }

}
