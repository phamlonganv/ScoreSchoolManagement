<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $filltable = [
        'id','name','is_special'
    ];
    public function teachers()
    {
        return $this->belongsToMany(Teacher::class,'class_room__teachers');
    }
    public function student()
    {
        return $this->hasMany(Student::class);
    }

}
