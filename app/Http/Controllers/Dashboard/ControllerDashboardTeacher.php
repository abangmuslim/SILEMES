<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Question;

class ControllerDashboardTeacher extends Controller
{
    public function index()
    {
        $data = [
            'total_courses'   => Course::count(),
            'total_exams'     => Exam::count(),
            'total_questions' => Question::count(),
        ];

        return view('teacher.dashboard.index', compact('data'));
    }
}