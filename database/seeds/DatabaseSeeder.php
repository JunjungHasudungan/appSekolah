<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run()
    {
        $this->call([
            UserTableSeeder::class,
            RoleTableSeeder::class,
            MajorTableSeeder::class,
            CoursesTableSeeder::class,
            PermissionTableSeeder::class,
            RoleuserTableSeeder::class,
            BiographyTableSeeder::class,
        ]);
    }
}
