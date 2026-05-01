<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// ✅ TAMBAHKAN INI
use App\Models\Enrollment;
use App\Models\Exam;
use App\Models\AttemptDetail;

class Attempt extends Model
{
    protected $fillable = [
        'enrollment_id',
        'exam_id',
        'status',
        'score',
        'started_at',
        'finished_at'
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function details()
    {
        return $this->hasMany(AttemptDetail::class);
    }
}