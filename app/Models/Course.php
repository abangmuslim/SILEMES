<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Course extends Model
{
    protected $fillable = [
        'program_id',
        'title',
        'description',
        'photo',
        'status'
    ];

    /*
    |--------------------------------------------------
    | RELATION
    |--------------------------------------------------
    */

    public function program()
    {
        return $this->belongsTo(Program::class);
    }

    public function modules()
    {
        return $this->hasMany(Module::class);
    }
}