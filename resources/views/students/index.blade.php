@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="card">
                <div class="card-header">List</div>
                <div class="card-body">
                    <table class=" table table-bordered table-hover">
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Periode</th>
                            <th>OPSI</th>
                        </tr>
                        <tr>
                            @foreach ($students as $student)
                                <td>{{$loop->iteration}}</td>
                                <td>{{ $student['nim'] }}</td>
                                <td><a href="{{route('student.show', $student->id )}}"> {{$student->name}}</a> </td>
                                <td>
                                    @foreach ($student->registrations as $registration)
                                        {{$registration->period}}
                                    @endforeach
                                </td>
                                <td>
                                    <button class = "btn btn-sm btn-warning" type="button" >Hapus</button>
                                    <button class = "btn btn-sm btn-secondary" type="button"><a href="{{route('student.edit', $student->id)}}"> Edit </a> </button>
                                </td>
                            @endforeach
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection