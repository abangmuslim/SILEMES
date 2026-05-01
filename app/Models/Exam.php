<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// ✅ TAMBAHKAN INI
use App\Models\Program;
use App\Models\Course;
use App\Models\Question;
use App\Models\Attempt;

class Exam extends Model
{
    protected $fillable = [
        'program_id',
        'course_id',
        'title',
        'type',
        'duration',
        'total_score',
        'status'
    ];

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function attempts()
    {
        return $this->hasMany(Attempt::class);
    }
}