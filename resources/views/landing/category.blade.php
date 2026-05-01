@extends('layouts.apppublic')

@section('title', 'Kategori')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="row">

    @for($i=1; $i<=6; $i++)
    <div class="col-md-4 mb-3">
        <div class="card shadow-sm text-center p-3">

            <h5>Kategori {{ $i }}</h5>

            <a href="#" class="btn btn-outline-primary btn-sm mt-2">
                Lihat
            </a>

        </div>
    </div>
    @endfor

</div>

@endsection