@extends('layouts.appstaff')

@section('title', 'Dashboard Staff')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="row">

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>Manajemen Student</h4>
                <p class="text-muted">Kelola data siswa & enrollment</p>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card shadow-sm">
            <div class="card-body">
                <h4>Data Enrollment</h4>
                <p class="text-muted">Monitoring lifecycle student</p>
            </div>
        </div>
    </div>

</div>

@endsection