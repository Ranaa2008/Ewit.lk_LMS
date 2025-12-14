<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
        'full_name',
        'email',
        'gender',
        'school',
        'grade',
        'year',
        'password',
        'phone',
        'address',
        'dob',
    ];

    protected $hidden = [
        'password',
    ];

    protected $casts = [
        'dob' => 'date',
        'password' => 'hashed',
    ];
}
