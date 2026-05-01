@extends('layouts.apppublic')

@section('title', 'Daftar Isi')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="card shadow-sm">
    <div class="card-body">

        <table class="table table-bordered table-hover">

            <thead class="bg-light">
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @for($i=1; $i<=10; $i++)
                <tr>
                    <td>{{ $i }}</td>
                    <td>Materi {{ $i }}</td>
                    <td>Kategori A</td>
                    <td>
                        <a href="#" class="btn btn-primary btn-sm">
                            Lihat
                        </a>
                    </td>
                </tr>
                @endfor

            </tbody>

        </table>

    </div>
</div>

@endsection