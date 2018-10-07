<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class University extends Model
{

    protected $table = 'universities';

    protected $fillable = [
        'name',
        'country',
        'state',
        'city',
    ];

    public function courses() {
        return $this->hasMany('App\Course');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
