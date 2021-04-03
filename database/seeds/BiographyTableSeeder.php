<?php

use Illuminate\Database\Seeder;
use App\Models\Biography;

class BiographyTableSeeder extends Seeder
{
    public function run()
    {
        $biographies = [
            [
                'id'                => 1,
                'id_biography'      => 'Admin01',
                'user_id'           => 1, 
                'role_id'           => 3, // Admin
                'gender'            => 'Laki-Laki',
                'birth_of_day'      => 'Jakarta',
                'birth_of_pleace'   => '23 April 1995',
                'total_point'       => null
            ],
            [
                'id'                => 2,
                'id_biography'      => 'T701',
                'user_id'           => 2, 
                'role_id'           => 1, // Teachers
                'gender'            => 'Perempuan',
                'birth_of_day'      => '12 November 1988',
                'birth_of_pleace'   => 'Bandung',
                'total_point'       => null
            ],
            [
                'id'                => 3,
                'id_biography'      => 'T808',
                'user_id'           => 3, 
                'role_id'           => 1, // Teachers
                'gender'            => 'Perempuan',
                'birth_of_day'      => '9 April 1987',
                'birth_of_pleace'   => 'Jakarta',
                'total_point'       => null
            ],
            [
                'id'                => 4,
                'id_biography'      => 'T949',
                'user_id'           => 4, 
                'role_id'           => 1, // Teachers
                'gender'            => 'Laki-laki',
                'birth_of_day'      => '6 Agusutus 1987',
                'birth_of_pleace'   => 'Jakarta',
                'total_point'       => null
            ],
            [
                'id'                => 5,
                'id_biography'      => 'A000021',
                'user_id'           => 5, 
                'role_id'           => 2, // Students
                'gender'            => 'Laki-laki',
                'birth_of_day'      => '23 November 1990',
                'birth_of_pleace'   => 'Jakarta',
                'total_point'       => 200
            ],
            [
                'id'                => 6,
                'id_biography'      => 'A000022',
                'user_id'           => 6, 
                'role_id'           => 2, // Students
                'gender'            => 'Laki-laki',
                'birth_of_day'      => '12 Desember 1986',
                'birth_of_pleace'   => 'Jakarta',
                'total_point'       => 230
            ],
            [
                'id'                => 7,
                'id_biography'      => 'Jakarta ',
                'user_id'           => 7, 
                'role_id'           => 2, // Students
                'gender'            => 'Perempuan',
                'birth_of_day'      => '27 April 1988',
                'birth_of_pleace'   => 'Bandung',
                'total_point'       => 400
            ],
            
        ];

        Biography::insert($biographies);
    }
}
