<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    protected $table = 'schedules';

    protected $fillable = [ 'period', 'weekday', 'start_time','course_id', 'user_id' ];

    public function schedules()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
    