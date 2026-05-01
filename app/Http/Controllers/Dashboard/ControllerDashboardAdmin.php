<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Student;
use App\Models\Program;
use App\Models\Course;
use App\Models\Exam;

class ControllerDashboardAdmin extends Controller
{
    public function index()
    {
        $data = [
            'total_users'     => User::count(),
            'total_students'  => Student::count(),
            'total_programs'  => Program::count(),
            'total_courses'   => Course::count(),
            'total_exams'     => Exam::count(),
        ];

        return view('admin.dashboard.index', compact('data'));
    }
}