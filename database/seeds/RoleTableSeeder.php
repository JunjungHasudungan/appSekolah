<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
class RoleTableSeeder extends Seeder
{
 
    public function run()
    {
        $roles = [
            [
                'id'        => 1,
                'title'     => 'teacher'
            ],
            [
                'id'        => 2,
                'title'     => 'student'
            ],
            [
                'id'        => 3,
                'title'     => 'admin'
            ]
        ];

        Role::insert($roles);
    }
}
