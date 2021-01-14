<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Subject;
use App\Models\Classes;

class Teacher extends Model
{
    use HasFactory;
    protected  $primaryKey = 'id';
    protected $filltable = [
        'id','name','subject_id','user_id'
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
    public function classes()
    {
        return $this->belongsToMany(Classes::class,'class_room__teachers');
    }
}
