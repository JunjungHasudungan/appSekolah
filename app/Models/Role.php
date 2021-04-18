<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $table = 'roles';
    protected $fillable = ['title'];

    public function students()
    {
        return $this->hasMany(\App\Models\Student::class);
    }

    public function users()
    {
        return $this->belongsToMany(\App\User::class);
    }
}
