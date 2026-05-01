@extends('layouts.apppublic')

@section('title', 'Detail Content')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="card shadow-sm">
    <div class="card-body">

        <div class="row">

            {{-- IMAGE --}}
            <div class="col-md-5">
                <img src="https://via.placeholder.com/500x300" class="img-fluid rounded">
            </div>

            {{-- CONTENT --}}
            <div class="col-md-7">

                <h4 class="font-weight-bold">Judul Course</h4>

                <hr>

                <p class="text-muted">
                    Ini adalah deskripsi lengkap dari course yang ditampilkan.
                    Bisa berisi materi panjang seperti artikel CMS profesional.
                </p>

                <p>
                    Konten detail lengkap ditampilkan di sini...
                </p>

            </div>

        </div>

    </div>
</div>

@endsection