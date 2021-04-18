<?php
use App\Models\Schedule;
use Illuminate\Database\Seeder;

class ScheduleTableSeeder extends Seeder
{
    public function run()
    {
        $schedules = [
            [
                'id'            => 1,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Senin',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2 // Antika Haya
            ],
            [
                'id'            => 2,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Selasa',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 2, // Data Sturture 
                'user_id'       => 4 //  Martine Putra
            ],
            [
                'id'            => 3,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Rabu',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 3
            ],
            [
                'id'            => 4,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Jumat',
                'start_time'    => '14:00',
                'end_time'      => '16:00',
                'course_id'     => 1, // Database Fundamental
                'user_id'       => 4 //  Martine Putra
            ],
            [
                'id'            => 5,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Jumat',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2
            ],
            [
                'id'            => 6,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Senin',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2
            ],
            [
                'id'            => 7,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Senin',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2
            ],
            [
                'id'            => 8,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Senin',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2
            ],
            [
                'id'            => 9,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Senin',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2
            ],
            [
                'id'            => 10,
                'period'        => 'January 2018 ', 
                'weekday'       => 'Senin',
                'start_time'    => '09:00',
                'end_time'      => '12:00',
                'course_id'     => 1, // Object Oriented Programming
                'user_id'       => 2
            ],


        ];

        Schedule::insert($schedules);
    }
}
