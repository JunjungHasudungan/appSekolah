<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public function roles()
    {
        return $this->belongsToMany('\App\Models\Role', 'role_user', 'role_id', 'user_id');
    }

    
    public function hasRol($role)
    {
        return $this->roles()->where('name', $role)->count() == 1;
    }

    public function biographies()
    {
        return $this->hasOne(\App\Models\Biography::class);
    }
}
