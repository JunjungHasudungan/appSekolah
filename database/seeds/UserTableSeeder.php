<?php
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            // admin
            [
                'id'            => 1,
                'name'          => 'Admin', 
                'email'         => 'Admin@admin.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            
            ],
            // teacher
            [
                'id'            => 2,
                'name'          => 'Antik Haya', 
                'email'         => 'antka@antika.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            ],
            // teacher
            [
                'id'            => 3,
                'name'          => 'Cahya Subroto', 
                'email'         => 'cahya@cahya.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            ],
            // teacher
            [
                'id'            => 4,
                'name'          => 'Martine Putra', 
                'email'         => 'martine@martine.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            ],
            // student
            [
                'id'            => 5,
                'name'          => 'Muhammad Faizal', 
                'email'         => 'Muhammad@muhammad.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            ],
            // student
            [
                'id'            => 6,
                'name'          => 'Alex Wirianata', 
                'email'         => 'alexa@alex.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            ],
            // student
            [
                'id'            => 7,
                'name'          => 'Desy Oktaviani', 
                'email'         => 'desi@desi.com',
                'password'      => '$2y$10$HvSDJRBDVWwRd18qj5oaQOF0DBXqnZcyFJ4dJA8hcQGAfmyZ7xkei',
                'remember_token'=>null
            ]
        ];

        User::insert($users);
    }

}
