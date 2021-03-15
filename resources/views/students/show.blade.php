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
                            <p>{{ trans('cruds.user.fields.name') }} <a  class="float-right">{{ $student['name'] }}</a></p>
                        </li>
                        <li class="list-group-item">
                            <p>{{ trans('cruds.user.fields.nim') }} <a  class="float-right">{{ $student['nim'] }}</a></p>
                        </li>
                    </ul>
                    <a href="{{route('student.index')}}" class="btn btn-primary btn-block">{{ trans('global.back_to_list') }}</a>
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