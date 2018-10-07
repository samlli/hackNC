<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class VerificationCode extends Model
{

    protected $table = 'verification_codes';

    protected $fillable = [
        'buyer_code',
        'seller_code',
    ];

    public function transaction() {
        $this->belongsTo('App\Transaction');
    }

}
