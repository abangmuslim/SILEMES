@extends('layouts.appteacher')

@section('title', 'Dashboard Teacher')

@section('content')

<div class="row">

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <b>Course Saya</b>
            </div>
            <div class="card-body">
                <h3>{{ $totalCourses ?? 0 }}</h3>
                <small class="text-muted">Total course yang Anda kelola</small>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <b>Exam Saya</b>
            </div>
            <div class="card-body">
                <h3>{{ $totalExams ?? 0 }}</h3>
                <small class="text-muted">Total ujian</small>
            </div>
        </div>
    </div>

</div>

<div class="card shadow-sm mt-3">
    <div class="card-header bg-white">
        <b>Recent Course</b>
    </div>

    <div class="card-body p-2">

        @for($i=1; $i<=5; $i++)
        <div class="d-flex justify-content-between mb-2">
            <span>Course {{$i}}</span>
            <small class="text-muted">Updated</small>
        </div>
        @endfor

    </div>
</div>

@endsection