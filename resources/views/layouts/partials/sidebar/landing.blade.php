<div class="">

    {{-- ================= KURSUS TERBARU ================= --}}
    <div class="card mb-3">
        <div class="card-header bg-danger text-white">
            <strong>Kursus Terbaru</strong>
        </div>
        <div class="card-body p-2">

            @forelse($courses ?? [] as $course)
                <div class="d-flex mb-2 border-bottom pb-2">

                    <img src="{{ $course->photo 
                        ? asset('uploads/courses/'.$course->photo) 
                        : asset('dist/img/default-150x150.png') }}"
                        style="width:50px; height:50px; object-fit:cover;"
                        class="mr-2 rounded">

                    <div>
                        <a href="{{ route('landing.content', $course->id) }}" 
                           class="text-dark font-weight-bold">
                            {{ $course->title }}
                        </a>
                        <br>
                        <small class="text-muted">Course</small>
                    </div>

                </div>
            @empty
                <small class="text-muted">Belum ada kursus</small>
            @endforelse

        </div>
    </div>


    {{-- ================= GURU TERBARU ================= --}}
    <div class="card mb-3">
        <div class="card-header bg-success text-white">
            <strong>Guru Terbaru</strong>
        </div>
        <div class="card-body p-2">

            @forelse($teachers ?? [] as $teacher)
                <div class="d-flex mb-2 border-bottom pb-2">

                    <img src="{{ $teacher->photo 
                        ? asset('uploads/users/'.$teacher->photo) 
                        : asset('dist/img/user2-160x160.jpg') }}"
                        style="width:50px; height:50px; object-fit:cover;"
                        class="mr-2 rounded-circle">

                    <div>
                        <span class="font-weight-bold">
                            {{ $teacher->name }}
                        </span>
                        <br>
                        <small class="text-muted">Pengajar</small>
                    </div>

                </div>
            @empty
                <small class="text-muted">Belum ada guru</small>
            @endforelse

        </div>
    </div>


    {{-- ================= KATEGORI ================= --}}
    <div class="card mb-3">
        <div class="card-header bg-info text-white">
            <strong>Kategori</strong>
        </div>
        <div class="card-body p-2">

            @forelse($programs ?? [] as $program)
                <div class="mb-2">
                    <a href="{{ route('landing.category.detail', $program->id) }}"
                       class="text-dark d-block">
                        <i class="fas fa-book mr-1"></i>
                        {{ $program->name }}
                    </a>
                </div>
            @empty
                <small class="text-muted">Belum ada kategori</small>
            @endforelse

        </div>
    </div>


    {{-- ================= JADWAL ================= --}}
    <div class="card mb-3">
        <div class="card-header bg-warning text-dark">
            <strong>Jadwal Bulan Ini</strong>
        </div>
        <div class="card-body p-2">

            @forelse($schedules ?? [] as $schedule)
                <div class="mb-2 border-bottom pb-2">
                    <strong>{{ $schedule['title'] }}</strong><br>
                    <small class="text-muted">
                        {{ $schedule['date'] }}
                    </small>
                </div>
            @empty
                <small class="text-muted">Belum ada jadwal</small>
            @endforelse

        </div>
    </div>

</div>