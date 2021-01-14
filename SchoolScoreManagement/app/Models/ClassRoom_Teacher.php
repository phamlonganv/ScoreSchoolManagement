<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClassRoom_Teacher extends Model
{
    use HasFactory;
    protected $filltable  = [
        'classroom_id','teacher_id'
    ];

}
