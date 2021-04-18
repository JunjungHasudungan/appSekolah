<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'            => 1,
                'name'          => 'Admin', // admin
                'email'         => 'Admin@admin.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            
            ],
            [
                'id'            => 2,
                'name'          => 'Antik Haya', // teacher
                'email'         => 'antka@antika.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '0',
                'remember_token'=>null
            ],
            [
                'id'            => 3,
                'name'          => 'Cahya Subroto', // teacher
                'email'         => 'cahya@cahya.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            ],
            [
                'id'            => 4,
                'name'          => 'Martine Putra', // teacher
                'email'         => 'martine@martine.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            ],
            [
                'id'            => 5,
                'name'          => 'Muhammad Faizal', // student
                'email'         => 'Muhammad@muhammad.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            ],
            [
                'id'            => 6, // student
                'name'          => 'Alex Wirianata', 
                'email'         => 'alexa@alex.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '0',
                'remember_token'=>null
            ],
            [
                'id'            => 7,
                'name'          => 'Desy Oktaviani', // student
                'email'         => 'desi@desi.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '0',
                'remember_token'=>null
            ],
            [
                'id'            => 8, 
                'name'          => 'Fetra Fdiyanto',  // Teacher
                'email'         => 'Fetra@Fetra.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            ],
            [
                'id'            => 9, 
                'name'          => 'Novi Yanti',  //Teacher
                'email'         => 'Novi@Novi.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            ],
            [
                'id'            => 10,
                'name'          => 'Ive Silviana',  // Teacher
                'email'         => 'Ive@Ive.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'active'        => '1',
                'remember_token'=>null
            ],
        ];

        User::insert($users);
    }

}
