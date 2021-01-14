<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;
use App\Models\Transcript;
use App\Models\Student;
class Student extends Model
{
    use HasFactory;
    protected $filltable = [
        'name','age','classes_id','parent_phone','address'
    ];
    public function classes()
    {
        return $this->belongsTo(Classes::class);
    }
    public function transcripts()
    {
        return $this->hasMany(Transcript::class);
    }
    public function comments()
    {
        return $this->hasMany(Student::class);
    }
}
