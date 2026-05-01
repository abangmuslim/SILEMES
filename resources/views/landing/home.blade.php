@extends('layouts.apppublic')

@section('title', 'Home')

@section('content')

@include('layouts.partials.components.breadcrumb')

<div class="row">

    {{-- SIDEBAR KIRI (TEACHER) --}}
    <div class="col-md-4 col-lg-4 mb-3">

        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white">
                <b>Pengajar</b>
            </div>

            <div class="card-body p-2">

                @forelse($teachers as $teacher)
                <div class="d-flex align-items-center mb-2">
                    <img src="{{ $teacher->photo ? asset('uploads/users/'.$teacher->photo) : 'https://via.placeholder.com/40' }}"
                         class="rounded-circle mr-2"
                         width="40"
                         height="40">
                    <span>{{ $teacher->name }}</span>
                </div>
                @empty
                <small class="text-muted">Belum ada data</small>
                @endforelse

            </div>
        </div>

    </div>

    {{-- CONTENT --}}
    <div class="col-md-8 col-lg-8">

        <div class="card shadow-sm mb-3">
            <div class="card-header bg-primary text-white">
                <b>Daftar Course</b>
            </div>

            <div class="card-body">

                <div class="row">

                    @forelse($courses as $course)
                    <div class="col-md-6 mb-3">
                        <div class="card h-100">

                            <img src="{{ $course->photo ? asset('uploads/courses/'.$course->photo) : 'https://via.placeholder.com/300x150' }}"
                                 class="card-img-top">

                            <div class="card-body d-flex flex-column">
                                <h6 class="font-weight-bold">{{ $course->title }}</h6>
                                <p class="text-muted small">
                                    {{ \Illuminate\Support\Str::limit($course->description, 60) }}
                                </p>

                                <a href="{{ route('landing.content', $course->id) }}"
                                   class="btn btn-primary btn-sm mt-auto">
                                    Baca Selengkapnya
                                </a>
                            </div>

                        </div>
                    </div>
                    @empty
                    <div class="col-12">
                        <small class="text-muted">Belum ada course tersedia</small>
                    </div>
                    @endforelse

                </div>

            </div>
        </div>

    </div>

</div>

@endsection