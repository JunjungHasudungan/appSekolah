<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    public function index()
    {
        $courses = Courses::with('majors')->get();

        // return view('course.index', compact('courses'));
        dd($courses);
    }

    public function create()
    {
        //
    }

    public function store(StoreCoursesRequest $request)
    {
        //
    }

    public function show(Courses $course)
    {
        //
    }

    public function edit(Courses $course)
    {
        //
    }

    public function update(UpdateCoursesRequest $request, Courses $course)
    {
        //
    }

    public function destroy(Courses $course)
    {
        //
    }
}
