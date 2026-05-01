@extends('layouts.apppublic')

@section('title', 'Contact')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="card shadow-sm">
    <div class="card-body">

        <h4>Kontak Kami</h4>

        <form>
            <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control">
            </div>

            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control">
            </div>

            <div class="form-group">
                <label>Pesan</label>
                <textarea class="form-control"></textarea>
            </div>

            <button class="btn btn-primary">Kirim</button>
        </form>

    </div>
</div>

@endsection