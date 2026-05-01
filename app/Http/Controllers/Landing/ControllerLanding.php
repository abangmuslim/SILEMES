<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\User;
use App\Models\Program;
use App\Models\Lesson;

class ControllerLanding extends Controller
{
    /*
    |--------------------------------------------------
    | GLOBAL SIDEBAR DATA (REUSABLE)
    |--------------------------------------------------
    */
    private function sidebarData()
    {
        $courses = Course::where('status', 'published')
            ->latest()
            ->take(5)
            ->get();

        $teachers = User::whereHas('roles', function ($q) {
                $q->where('name', 'teacher');
            })
            ->latest()
            ->take(5)
            ->get();

        $programs = Program::latest()->get();

        // Dummy schedule (nanti bisa dari DB)
        $schedules = [
            ['title' => 'Ujian Laravel', 'date' => '10 Mei 2026'],
            ['title' => 'Live Class JS', 'date' => '15 Mei 2026'],
            ['title' => 'Quiz Mingguan', 'date' => '20 Mei 2026'],
        ];

        return compact('courses', 'teachers', 'programs', 'schedules');
    }

    /*
    |--------------------------------------------------
    | HOME
    |--------------------------------------------------
    */
    public function home()
    {
        $courses = Course::where('status', 'published')
            ->latest()
            ->take(6)
            ->get();

        $teachers = User::whereHas('roles', function ($q) {
                $q->where('name', 'teacher');
            })
            ->latest()
            ->take(5)
            ->get();

        $sidebar = $this->sidebarData();

        return view('landing.home', array_merge(
            compact('courses', 'teachers'),
            $sidebar
        ));
    }

    /*
    |--------------------------------------------------
    | ABOUT
    |--------------------------------------------------
    */
    public function about()
    {
        return view('landing.about', $this->sidebarData());
    }

    /*
    |--------------------------------------------------
    | CONTACT
    |--------------------------------------------------
    */
    public function contact()
    {
        return view('landing.contact', $this->sidebarData());
    }

    /*
    |--------------------------------------------------
    | DETAIL CONTENT (COURSE)
    |--------------------------------------------------
    */
    public function contentDetail($id)
    {
        $course = Course::findOrFail($id);

        return view('landing.contentdetail', array_merge(
            compact('course'),
            $this->sidebarData()
        ));
    }

    /*
    |--------------------------------------------------
    | CATEGORY (PROGRAM)
    |--------------------------------------------------
    */
    public function category()
    {
        $programs = Program::latest()->get();

        return view('landing.category', array_merge(
            compact('programs'),
            $this->sidebarData()
        ));
    }

    /*
    |--------------------------------------------------
    | CATEGORY DETAIL
    |--------------------------------------------------
    */
    public function categoryDetail($id)
    {
        $program = Program::findOrFail($id);

        $courses = Course::where('program_id', $id)
            ->where('status', 'published')
            ->get();

        return view('landing.categorydetail', array_merge(
            compact('program', 'courses'),
            $this->sidebarData()
        ));
    }

    /*
    |--------------------------------------------------
    | TOC (LESSON)
    |--------------------------------------------------
    */
    public function toc()
    {
        $lessons = Lesson::with('module.course')->get();

        return view('landing.toc', array_merge(
            compact('lessons'),
            $this->sidebarData()
        ));
    }
}