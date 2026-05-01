<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Enrollment;
use App\Models\Progress;
use App\Models\Attempt;

class ControllerDashboardStudent extends Controller
{
    public function index()
    {
        $student = Auth::guard('student')->user()->student;

        $enrollments = Enrollment::where('student_id', $student->id)->pluck('id');

        $data = [
            'total_courses'   => $enrollments->count(),
            'progress_done'   => Progress::whereIn('enrollment_id', $enrollments)
                                        ->where('status', 'completed')
                                        ->count(),
            'total_attempts'  => Attempt::whereIn('enrollment_id', $enrollments)->count(),
        ];

        return view('student.dashboard.index', compact('data'));
    }
}