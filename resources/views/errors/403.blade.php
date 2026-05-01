@extends('layouts.apppublic')

@section('title', '403 Forbidden')

@section('content')

<div class="text-center py-5">
    <h1 class="display-3 text-warning"><b>403</b></h1>
    <h4>Akses Ditolak</h4>
    <p class="text-muted">Kamu tidak memiliki izin untuk mengakses halaman ini.</p>

    <a href="{{ route('landing.home') }}" class="btn btn-primary mt-3">
        Kembali ke Home
    </a>
</div>

@endsection