<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{

    private $table = 'payment_methods';

    private $fillable = [
        'payment_method',
    ];

    public function transaction() {
        return $this->belongsTo('App\Transaction');
    }

}
