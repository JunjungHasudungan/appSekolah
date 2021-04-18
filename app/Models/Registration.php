<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $table = 'registrations';
    protected $fillable = ['user_id', 'course_id', 'period', 'registration_date'];

    public function users()
    {
        return $this->belongsTo(Student::class, 'user_id');
    }

    public function courses()
    {
        return $this->belongsTo(Courses::class, 'course_id');
    }
}
