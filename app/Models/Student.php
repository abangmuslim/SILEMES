<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Address;
use App\Models\Enrollment;

class Student extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'name',
        'nis',
        'gender',
        'birth_date',
        'address_id',
        'status',
        'photo'
    ];

    /*
    |--------------------------------------------------
    | RELATION
    |--------------------------------------------------
    */

    // 1 student = 1 account
    public function account()
    {
        return $this->hasOne(StudentAccount::class);
    }

    // student → enrollments
    public function enrollments()
    {
        return $this->hasMany(Enrollment::class);
    }

    // optional (kalau mau akses address)
    public function address()
    {
        return $this->belongsTo(Address::class);
    }
}