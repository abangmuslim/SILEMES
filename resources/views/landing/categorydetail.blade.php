@extends('layouts.apppublic')

@section('title', 'Detail Kategori')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="row">

    @for($i=1; $i<=6; $i++)
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm">

            <div class="card-body">
                <h6>Course {{ $i }}</h6>
                <p class="small text-muted">Deskripsi singkat...</p>

                <a href="#" class="btn btn-primary btn-sm">
                    Baca Selengkapnya
                </a>
            </div>

        </div>
    </div>
    @endfor

</div>

@endsection