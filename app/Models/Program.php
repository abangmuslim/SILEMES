<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Program extends Model
{
    protected $fillable = [
        'institution_id',
        'name',
        'type',
        'photo'
    ];

    /*
    |--------------------------------------------------
    | RELATION
    |--------------------------------------------------
    */

    public function courses()
    {
        return $this->hasMany(Course::class);
    }
}