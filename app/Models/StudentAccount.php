<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class StudentAccount extends Authenticatable
{
    use Notifiable;

    protected $table = 'student_accounts';

    protected $fillable = [
        'student_id',
        'email',
        'password',
        'last_login',
        'status'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'last_login' => 'datetime',
    ];

    /*
    |--------------------------------------------------
    | RELATION
    |--------------------------------------------------
    */

    public function student()
    {
        return $this->belongsTo(\App\Models\Student::class);
    }
}