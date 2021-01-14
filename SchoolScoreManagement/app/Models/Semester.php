<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Transcripts;
class Semester extends Model
{
    use HasFactory;
    protected $filltable = [
        'name'
    ];
    public function transcripts()
    {
        return $this->hasMany(Transcripts::class);
    }

}
