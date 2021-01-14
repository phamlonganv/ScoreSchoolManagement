<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;
    protected $filltable = [
        'name'
    ];
    public function teachers()
    {
        return $this->hasMany(Subject::class);
    }

}
