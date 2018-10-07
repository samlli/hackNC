<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'users';

    use Notifiable;

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'password',
        'phone_number',
        'university_id',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    public function univesity() {
        return $this->hasOne('App\University');
    }

    public function posts() {
        return $this->hasMany('App\Post');
    }

}
