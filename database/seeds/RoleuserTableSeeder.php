<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
// use App\User;

class RoleuserTableSeeder extends Seeder
{
    public function run()
    {
        Role::findOrFail(1)->users()->sync([2, 3, 4, 8, 9, 10]); // Teachers
        Role::findOrFail(2)->users()->sync([5, 6, 7]); // Students
        Role::findOrFail(3)->users()->sync(1); // Admin 
        // User::findOrFail(1)->roles()->sync(1);
    
    }
}
