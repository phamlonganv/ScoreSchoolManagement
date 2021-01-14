<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Student;
class Comments extends Model
{
    use HasFactory;
    protected $filltable = [
        'student_id','content','conduct'
    ];
    public function scoretype()
    {
        return $this->belongsTo(Student::class);
    }
}
