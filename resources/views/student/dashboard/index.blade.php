@extends('layouts.appstudent')

@section('title', 'Dashboard Student')

@section('content')


{{-- STATS --}}
<div class="row">

    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h3>{{ $myCourses ?? 0 }}</h3>
                <small class="text-muted">Course Diikuti</small>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h3>{{ $progress ?? '0%' }}</h3>
                <small class="text-muted">Progress</small>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card shadow-sm text-center">
            <div class="card-body">
                <h3>{{ $score ?? 0 }}</h3>
                <small class="text-muted">Nilai Rata-rata</small>
            </div>
        </div>
    </div>

</div>

{{-- COURSE LIST --}}
<div class="card shadow-sm mt-3">
    <div class="card-header bg-white">
        <b>Course Saya</b>
    </div>

    <div class="card-body">

        @for($i=1; $i<=4; $i++)
        <div class="mb-2">
            <b>Course {{$i}}</b>
            <div class="progress" style="height:6px;">
                <div class="progress-bar" style="width:60%"></div>
            </div>
        </div>
        @endfor

    </div>
</div>

@endsection