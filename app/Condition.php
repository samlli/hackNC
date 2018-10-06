<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Condition extends Model
{
    private $table = 'conditions';

    private $fillable = [
        'condition',
    ];

    public function post() {
        return $this->belongsTo('App\Post');
    }

    public function watchlist() {
        return $this->belongsTo('App\Watchlist');
    }

}
