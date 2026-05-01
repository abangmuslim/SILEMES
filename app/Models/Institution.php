<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    protected $fillable = [
        'name',
        'type',
        'address_id',
        'photo'
    ];

    public function address()
    {
        return $this->belongsTo(Address::class);
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}