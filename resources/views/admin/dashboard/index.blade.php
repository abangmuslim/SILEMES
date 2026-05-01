@extends('layouts.appadmin')

@section('title', 'Dashboard Admin')

@section('content')

{{-- ================= STATS ================= --}}
<div class="row">

    @foreach([
        ['title'=>'Users','value'=>$totalUsers ?? 0,'color'=>'primary','icon'=>'fa-users'],
        ['title'=>'Students','value'=>$totalStudents ?? 0,'color'=>'success','icon'=>'fa-user-graduate'],
        ['title'=>'Courses','value'=>$totalCourses ?? 0,'color'=>'warning','icon'=>'fa-book'],
        ['title'=>'Exams','value'=>$totalExams ?? 0,'color'=>'danger','icon'=>'fa-file-alt'],
    ] as $item)

    <div class="col-md-3 mb-3">
        <div class="card border-0 shadow-sm">
            <div class="card-body d-flex align-items-center">
                <div class="mr-3 text-{{ $item['color'] }}">
                    <i class="fas {{ $item['icon'] }} fa-2x"></i>
                </div>
                <div>
                    <small class="text-muted">{{ $item['title'] }}</small>
                    <h5 class="mb-0">{{ $item['value'] }}</h5>
                </div>
            </div>
        </div>
    </div>

    @endforeach

</div>

{{-- ================= CHART + ACTIVITY ================= --}}
<div class="row">

    {{-- CHART --}}
    <div class="col-md-8">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <b>Platform Activity</b>
            </div>
            <div class="card-body">
                <canvas id="chartAdmin"></canvas>
            </div>
        </div>
    </div>

    {{-- ACTIVITY --}}
    <div class="col-md-4">
        <div class="card shadow-sm">
            <div class="card-header bg-white">
                <b>Recent Activity</b>
            </div>
            <div class="card-body p-2">

                @for($i=1; $i<=5; $i++)
                <div class="d-flex align-items-center mb-2">
                    <i class="fas fa-circle text-primary mr-2" style="font-size:8px;"></i>
                    <small>User melakukan aktivitas {{$i}}</small>
                </div>
                @endfor

            </div>
        </div>
    </div>

</div>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
new Chart(document.getElementById('chartAdmin'), {
    type: 'line',
    data: {
        labels: ['Mon','Tue','Wed','Thu','Fri','Sat','Sun'],
        datasets: [{
            label: 'Activity',
            data: [12,19,3,5,2,3,9],
            fill: false
        }]
    }
});
</script>
@endpush