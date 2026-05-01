<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Enrollment;
use App\Models\Program;

class ControllerDashboardStaff extends Controller
{
    public function index()
    {
        $data = [
            'total_students'     => Student::count(),
            'total_enrollments'  => Enrollment::count(),
            'active_students'    => Student::where('status', 'active')->count(),
            'total_programs'     => Program::count(),
        ];

        return view('staff.dashboard.index', compact('data'));
    }
}