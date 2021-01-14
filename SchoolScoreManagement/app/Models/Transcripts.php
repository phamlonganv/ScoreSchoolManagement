<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Subject;
use App\Models\Semester;
use App\Models\ScoreType;
use App\Models\Student;
use App\Models\Comment;

class Transcripts extends Model
{
    use HasFactory;
    protected $filltable = [
        'student_id','subject_id','semester_id','scoretype_id','scores'
    ];

    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function semester()
    {
        return $this->belongsTo(Semester::class);
    }
    public function scoretype()
    {
        return $this->belongsTo(ScoreType::class);
    }
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
