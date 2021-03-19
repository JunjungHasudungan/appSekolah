@extends('layouts.master')

@section('content')
        <p>No Induk: {{ $teacher->id_teacher }}</p>
        <p>Nama: {{ $teacher->name }}</p>
        <p>Gender: {{ $teacher->gender }}</p>
        <p>Tempat Lahir: {{ $teacher->birth_of_pleace }}</p>
        <p>Tanggal Lahir: {{ $teacher->birth_of_day }}</p>
        <p>Role: {{$teacher->roles->title}}</p>
@endsection