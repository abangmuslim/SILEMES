@extends('layouts.apppublic')

@section('title', '500 Server Error')

@section('content')

<div class="text-center py-5">
    <h1 class="display-3 text-danger"><b>500</b></h1>
    <h4>Terjadi Kesalahan Server</h4>
    <p class="text-muted">Silakan coba lagi nanti atau hubungi admin.</p>

    <a href="{{ route('landing.home') }}" class="btn btn-primary mt-3">
        Kembali ke Home
    </a>
</div>

@endsection