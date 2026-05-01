<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// ✅ TAMBAHKAN INI
use App\Models\Exam;
use App\Models\Option;

class Question extends Model
{
    protected $fillable = [
        'exam_id',
        'question_text',
        'type'
    ];

    public function exam()
    {
        return $this->belongsTo(Exam::class);
    }

    public function options()
    {
        return $this->hasMany(Option::class);
    }
}