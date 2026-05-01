<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AttemptDetail extends Model
{
    protected $fillable = [
        'attempt_id',
        'question_id',
        'answer',
        'is_correct'
    ];

    public function attempt()
    {
        return $this->belongsTo(Attempt::class);
    }

    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}