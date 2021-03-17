<?php

use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert([
            'title' => 'user',
        ]);

        DB::table('roles')->insert([
            'title' => 'admin'
        ]);

        DB::table('roles')->insert([
            'title' => 'student'
        ]);

        DB::table('roles')->insert([
            'title' => 'teacher'
        ]);
    }
}
