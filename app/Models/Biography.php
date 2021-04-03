<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biography extends Model
{
    protected $table = 'biographies';

    protected $fillable = ['user_id', 'role_id', 'gender', 'birth_of_day', 'birth_of_pleace', 'total_point'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function roles()
    {
        return $this->belongsTo(Role::class);
    }
}
