<?php

use Illuminate\Database\Seeder;
use App\Models\Registration;

class RegistrationTableSeeder extends Seeder
{

    public function run()
    {
        $registrations = [
            [
                'id'                => 1,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 2,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 2, //  Data Structure
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 3,
                'user_id'           => 5, //   Desy Oktaviani 
                'course_id'         => 1, // OOP
                'period'            => 'July 2018',
                'registration_date' => '10 April 2018'
            ],
            [
                'id'                => 4,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 5,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 6,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 7,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 8,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 9,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
            [
                'id'                => 10,
                'user_id'           => 5, //  Muhammad Faizal 
                'course_id'         => 1, // OOP
                'period'            => 'January 2018',
                'registration_date' => '12 November 2017'
            ],
        ];

        Registration::insert($registrations);
    }
}
