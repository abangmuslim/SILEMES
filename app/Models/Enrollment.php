<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// ✅ TAMBAHKAN INI
use App\Models\Student;
use App\Models\Program;
use App\Models\Classes;
use App\Models\Progress;
use App\Models\Attempt;
use App\Models\Assessment;
use App\Models\Certificate;

class Enrollment extends Model
{
    protected $fillable = [
        'student_id',
        'program_id',
        'class_id',
        'status',
        'start_date',
        'end_date'
    ];

    /*
    |--------------------------------------------------
    | RELATION
    |--------------------------------------------------
    */

    public function student()
    {
        return $this->belongsTo(Student::class);
    }

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function class()
    {
        return $this->belongsTo(Classes::class);
    }

    public function progress()
    {
        return $this->hasMany(Progress::class);
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }

    public function assessments()
    {
        return $this->hasMany(Assessment::class);
    }

    public function certificate()
    {
        return $this->hasOne(Certificate::class);
    }
}