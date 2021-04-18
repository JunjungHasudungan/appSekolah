<?php

namespace App\Http\Controllers\Admin;

use App\Models\Major;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MajorController extends Controller
{
    public function index()
    {
        // $majors = Major::with('courses')->get();
        $majors = Major::paginate(5);
        
        return view('admin.major.index', compact('majors')); 
        // dd($majors);
    }


    public function create()
    {
        return view('admin.major.create');
    }


    public function store(StoreMajorRequest $request)
    {
        $major = Major::create($request->all());
        
        return redirect()->route('major.index');
    }


    public function show(Major $major)
    {
        // $major->find($major);
        // $major->where('id', $major)->get(['name', 'cost']);
        return view('major.show', compact('major'));
        // dd($major);
    }


    public function edit(Major $major)
    {
        return view('major.edit', compact('major'));
    }

    
    public function update(UpdateMajorRequest $request, Major $major)
    {
        $major->update($request->all());
        
        return redirect()->route('major.index');
    }

    
    public function destroy(Major $major)
    {
        $major->delete();

        return redirect()->route('major.index');
    }
}
