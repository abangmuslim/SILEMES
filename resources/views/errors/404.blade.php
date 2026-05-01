@extends('layouts.apppublic')

@section('title', '404 Not Found')

@section('content')

<div class="text-center py-5">
    <h1 class="display-3 text-primary"><b>404</b></h1>
    <h4>Halaman Tidak Ditemukan</h4>
    <p class="text-muted">Halaman yang kamu cari tidak tersedia.</p>

    <a href="{{ route('landing.home') }}" class="btn btn-primary mt-3">
        Kembali ke Home
    </a>
</div>

@endsection