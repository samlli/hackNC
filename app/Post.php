<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    private $table = 'posts';

    private $fillable = [
        'user_id',
        'isbn',
        'course_id',
        'price',
        'condition_id',
        'notes',
    ];

    public function course() {
        return $this->hasOne('App\Course');
    }

    public function condition() {
        return $this->hasOne('App\Condition');
    }

    public function transaction() {
        return $this->belongsTo('App\Transaction');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }

}
