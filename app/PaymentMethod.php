<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{

    protected $table = 'payment_methods';

    protected $fillable = [
        'payment_method',
    ];

    public function transaction() {
        return $this->belongsTo('App\Transaction');
    }

}
