@extends('layouts.master')

@section('content')
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class=" card card-primary card-outline">
                    <div class="card-body box-profile">
                        <div class="text-center">Detail Data Diri Siswa</div>
                    </div>
                    <ul class="list-group list-group-unbordered-md-3">
                        <li class="list-group-item">
                            <p>Nama : <a  class="float-right">{{ $students['name'] }}</a></p>
                        </li>
                        <li class="list-group-item">
                            <p>NIM : <a  class="float-right">{{ $students['nim'] }}</a></p>
                        </li>
                    </ul>
                    <a href="{{route('student.index')}}" class="btn btn-primary btn-block">Kembali</a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- 
    <div class="card">
        <div class="card-header">
            <div class="card-body">
                <h2><small>Tanggal lahir: {{ $students->brithOfDay }}</small></h2>
            </div>
        </div>
    </div> --}}
    
@endsection