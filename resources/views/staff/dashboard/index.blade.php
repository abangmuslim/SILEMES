@extends('layouts.appstaff')

@section('title', 'Dashboard Staff')

@section('content')


{{-- ================= STATS (STAFF VERSION) ================= --}}
<div class="row">

    @foreach([
    ['title'=>'Students Managed','value'=>$totalStudents ?? 0,'color'=>'success','icon'=>'fa-user-graduate'],
    ['title'=>'Enrollments','value'=>$totalEnrollments ?? 0,'color'=>'primary','icon'=>'fa-layer-group'],
    ['title'=>'Active Classes','value'=>$totalClasses ?? 0,'color'=>'warning','icon'=>'fa-chalkboard'],
    ['title'=>'Pending Tasks','value'=>$totalTasks ?? 0,'color'=>'danger','icon'=>'fa-tasks'],
    ] as $item)

    <div class="col-md-3 col-6 mb-3">
        <div class="card shadow-sm border-0 h-100 dashboard-card">
            <div class="card-body d-flex align-items-center">
                <div class="icon-box text-{{ $item['color'] }} mr-3">
                    <i class="fas {{ $item['icon'] }} fa-lg"></i>
                </div>
                <div>
                    <small class="text-muted">{{ $item['title'] }}</small>
                    <h5 class="mb-0 font-weight-bold">{{ $item['value'] }}</h5>
                </div>
            </div>
        </div>
    </div>

    @endforeach

</div>

{{-- ================= MAIN CONTENT ================= --}}
<div class="row">

    {{-- LEFT: QUICK ACCESS --}}
    <div class="col-md-8 mb-3">

        <div class="card shadow-sm border-0">
            <div class="card-header bg-transparent">
                <b>Quick Access</b>
            </div>

            <div class="card-body">

                <div class="row">

                    {{-- STUDENT --}}
                    <div class="col-md-6 mb-3">
                        <a href="{{ Route::has('staff.students.index') ? route('staff.students.index') : '#' }}"
                            class="text-decoration-none">
                            <div class="quick-box p-3 border rounded">
                                <i class="fas fa-user-graduate text-success"></i>
                                <h6 class="mt-2 mb-1">Manajemen Student</h6>
                                <small class="text-muted">Kelola data siswa</small>
                            </div>
                        </a>
                    </div>

                    {{-- ENROLLMENT --}}
                    <div class="col-md-6 mb-3">
                        <a href="{{ Route::has('staff.enrollment.index') ? route('staff.enrollment.index') : '#' }}"
                            class="text-decoration-none">
                            <div class="quick-box p-3 border rounded">
                                <i class="fas fa-layer-group text-primary"></i>
                                <h6 class="mt-2 mb-1">Enrollment</h6>
                                <small class="text-muted">Monitoring lifecycle student</small>
                            </div>
                        </a>
                    </div>

                </div>

            </div>
        </div>

    </div>

    {{-- RIGHT: ACTIVITY --}}
    <div class="col-md-4">

        <div class="card shadow-sm border-0">
            <div class="card-header bg-transparent">
                <b>Recent Activity</b>
            </div>

            <div class="card-body p-3">

                @for($i=1; $i<=6; $i++)
                    <div class="d-flex align-items-start mb-3">
                    <div class="dot mr-2 mt-1"></div>
                    <div>
                        <small class="d-block">Staff mengupdate data student #{{ $i }}</small>
                        <small class="text-muted">baru saja</small>
                    </div>
            </div>
            @endfor

        </div>
    </div>

</div>

</div>

@endsection


{{-- ================= STYLE TAMBAHAN ================= --}}
@push('styles')
<style>
    .dashboard-card {
        transition: .2s;
        border-radius: 12px;
    }

    .dashboard-card:hover {
        transform: translateY(-3px);
    }

    .icon-box {
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .quick-box {
        transition: .2s;
        background: var(--card-bg, #fff);
    }

    .quick-box:hover {
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
    }

    .dot {
        width: 8px;
        height: 8px;
        background: #6c757d;
        border-radius: 50%;
    }
</style>
@endpush