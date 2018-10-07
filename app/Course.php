<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{

    protected $table = 'courses';

    protected $fillable = [
        'university_id',
        'department_abrv',
        'course_number',
    ];

    public function Post() {
        return $this->belongsTo('App\Post');
    }

    public function University() {
        return $this->belongsTo('App\University');
    }

}
