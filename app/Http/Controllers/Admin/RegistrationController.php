<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\StoreRegistrationRequest;
use App\Http\Requests\UpdateRegistrationRequest;
use App\Models\Registration;
use App\Models\Student;
use App\Models\Subject;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function index()
    {
        $registrations = Registration::with('students')->get();
        return view('registration.index', compact('registrations'));
        // dd($registrations);
    }


    public function create()
    {
        $students = Student::pluck('name', 'id');
        $subjects = Subject::pluck('name', 'id');
        return view('registration.create', compact('student', 'subject'));
    }


    public function store(StoreRegistrationRequest $request)
    {
        $registrations = Registration::create($request->all());
        return redirect()->route('registration.index');
    }


    public function show(Registration $registration)
    {
        //
    }


    public function edit(Registration $registration)
    {
        $registration->find($registration);
        return view('registration.edit', compact('registration'));
    }


    public function update(UpteRegistrationRequest $request, Registration $registration)
    {
        //
    }


    public function destroy(Registration $registration)
    {
        //
    }
}
