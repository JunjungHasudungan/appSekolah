<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'majors';
    
    protected $fillable = ['name', 'cost'];

    public function courses()
    {
        return $this->hasMany(Courses::class);
    }
}
