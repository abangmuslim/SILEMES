<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Assessment extends Model
{
    protected $fillable = [
        'enrollment_id',
        'type',
        'score',
        'notes'
    ];

    public function enrollment()
    {
        return $this->belongsTo(Enrollment::class);
    }
}