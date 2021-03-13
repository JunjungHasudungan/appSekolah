<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'students';
    protected $fillable = ['nim', 'name', 'gender', 'birthOfDay', 'birthOfPlace', 'totalPoint'];


    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}
