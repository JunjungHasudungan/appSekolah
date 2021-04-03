<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
use Illuminate\Support\Str;
class TeacherController extends Controller
{
    public function index()
    {
        $teachers = Teacher::paginate(5);
        return view('teachers.index', compact('teachers'));
    }

    public function create()
    {
        $teachers = Teacher::all()->latest();
        return view('teachers.create', compact('teachers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4',
            ]);
        
         Teacher::create([
            'name' => $request->name,
            'slug' =>Str::slug($request->name, '-'),
        ]);

        return redirect()->route('teacher.index'); 
    }


    public function show($teacher)
    {
        $teacher = Teacher::where('slug', $teacher)->first();
        
        return view('teachers.show', compact('teacher'));
    }


    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
