<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Watchlist extends Model
{
    protected $table = 'watchlist';

    protected $fillable = [
        'user_id',
        'isbn',
        'max_price',
        'worst_condition',
    ];

    public function condition() {
        return $this->hasOne('App\Condition');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
