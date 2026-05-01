<?php

use Illuminate\Support\Facades\Route;

/*
|------------------------------------------------------------------
| CONTROLLERS
|------------------------------------------------------------------
*/
use App\Http\Controllers\Landing\ControllerLanding;
use App\Http\Controllers\Auth\ControllerAuthUser;
use App\Http\Controllers\Auth\ControllerAuthStudent;

use App\Http\Controllers\Dashboard\ControllerDashboardAdmin;
use App\Http\Controllers\Dashboard\ControllerDashboardStaff;
use App\Http\Controllers\Dashboard\ControllerDashboardTeacher;
use App\Http\Controllers\Dashboard\ControllerDashboardStudent;


/*
|------------------------------------------------------------------
| LANDING (PUBLIC)
|------------------------------------------------------------------
*/
Route::get('/', [ControllerLanding::class, 'home'])->name('landing.home');
Route::get('/about', [ControllerLanding::class, 'about'])->name('landing.about');
Route::get('/contact', [ControllerLanding::class, 'contact'])->name('landing.contact');
Route::get('/content/{id}', [ControllerLanding::class, 'contentDetail'])->name('landing.content');
Route::get('/category', [ControllerLanding::class, 'category'])->name('landing.category');
Route::get('/category/{id}', [ControllerLanding::class, 'categoryDetail'])->name('landing.category.detail');
Route::get('/toc', [ControllerLanding::class, 'toc'])->name('landing.toc');


/*
|------------------------------------------------------------------
| AUTH USER (ADMIN / STAFF / TEACHER)
|------------------------------------------------------------------
*/
Route::get('/login', [ControllerAuthUser::class, 'showLogin'])->name('login');
Route::post('/login', [ControllerAuthUser::class, 'login'])->name('login.process');
Route::post('/logout', [ControllerAuthUser::class, 'logout'])->name('logout');


/*
|------------------------------------------------------------------
| AUTH STUDENT
|------------------------------------------------------------------
*/
Route::get('/student/login', [ControllerAuthStudent::class, 'showLogin'])->name('student.login');
Route::post('/student/login', [ControllerAuthStudent::class, 'login'])->name('student.login.process');
Route::post('/student/logout', [ControllerAuthStudent::class, 'logout'])->name('student.logout');


/*
|------------------------------------------------------------------
| DASHBOARD USER (ROLE BASED)
|------------------------------------------------------------------
*/

Route::prefix('admin')
    ->middleware(['user:admin'])
    ->group(function () {
        Route::get('/dashboard', [ControllerDashboardAdmin::class, 'index'])
            ->name('admin.dashboard');
    });

Route::prefix('staff')
    ->middleware(['user:admin,staff'])
    ->group(function () {
        Route::get('/dashboard', [ControllerDashboardStaff::class, 'index'])
            ->name('staff.dashboard');
    });

Route::prefix('teacher')
    ->middleware(['user:admin,teacher'])
    ->group(function () {
        Route::get('/dashboard', [ControllerDashboardTeacher::class, 'index'])
            ->name('teacher.dashboard');
    });

/*
|------------------------------------------------------------------
| DASHBOARD STUDENT
|------------------------------------------------------------------
*/

Route::prefix('student')
    ->middleware(['student'])
    ->group(function () {
        Route::get('/dashboard', [ControllerDashboardStudent::class, 'index'])
            ->name('student.dashboard');
    });