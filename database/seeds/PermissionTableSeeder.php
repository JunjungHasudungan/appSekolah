<?php

use Illuminate\Database\Seeder;
use App\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
            [
                'id'        => '1',
                'title'     => 'teacher_access'
            ],
            [
                'id'        => '2',
                'title'     => 'teacher_index'
            ],
            [
                'id'        => '3',
                'title'     => 'teacher_create'
            ],
            [
                'id'        => '4',
                'title'     => 'teacher_show'
            ],
            [
                'id'        => '5',
                'title'     => 'teacher_edit'
            ],
            [
                'id'        => '6',
                'title'     => 'teacher_delete'
            ],
            [
                'id'        => '7',
                'title'     => 'student_access'
            ],
            [
                'id'        => '8',
                'title'     => 'student_create'
            ],
            [
                'id'        => '9',
                'title'     => 'student_index'
            ],
            [
                'id'        => '10',
                'title'     => 'student_show'
            ],
            [
                'id'        => '11',
                'title'     => 'student_edit'
            ],
            [
                'id'        => '12',
                'title'     => 'student_delete'
            ],
            [
                'id'        => '13',
                'title'     => 'major_access'
            ],
            [
                'id'        => '14',
                'title'     => 'major_index'
            ],
            [
                'id'        => '15',
                'title'     => 'major_create'
            ],
            [
                'id'        => '16',
                'title'     => 'major_show'
            ],
            [
                'id'        => '17',
                'title'     => 'major_edit'
            ],
            [
                'id'        => '18',
                'title'     => 'major_delete'
            ],
            [
                'id'        => '19',
                'title'     => 'courses_access'
            ],
            [
                'id'        => '20',
                'title'     => 'courses_index'
            ],
            [
                'id'        => '21',
                'title'     => 'courses_create'
            ],
            [
                'id'        => '22',
                'title'     => 'courses_show'
            ],
            [
                'id'        => '23',
                'title'     => 'courses_edit'
            ],
            [
                'id'        => '24',
                'title'     => 'courses_delete'
            ],
        ];
        Permission::insert($permissions);
    }
}
