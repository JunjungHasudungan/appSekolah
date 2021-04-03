<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Major;
use App\Http\Requests\StoreMajorRequest;
use App\Http\Requests\UpdateMajorRequest;
use Illuminate\Support\Facades\DB;
class MajorController extends Controller
{
    public function index()
    {
        // $majors = Major::with('courses')->get();
        $majors = Major::paginate(5);
        
        return view('majors.index', compact('majors')); 
        // dd($majors);
    }


    public function create()
    {
        return view('majors.create');
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
        return view('majors.show', compact('major'));
        // dd($major);
    }


    public function edit(Major $major)
    {
        return view('majors.edit', compact('major'));
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
