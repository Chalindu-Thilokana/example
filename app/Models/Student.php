<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
        'Student_Name',
        'Student_Grade',
        'birth_day',
        'Student_Parent_Name',
        'Student_Address',
        'phone_number',
        'other',

    ];
}
