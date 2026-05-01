<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

// ✅ TAMBAHKAN INI
use App\Models\User;
use App\Models\Student;
use App\Models\Institution;

class Address extends Model
{
    protected $fillable = [
        'street',
        'village',
        'district',
        'regency',
        'province',
        'postal_code',
        'country'
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function students()
    {
        return $this->hasMany(Student::class);
    }

    public function institutions()
    {
        return $this->hasMany(Institution::class);
    }
}