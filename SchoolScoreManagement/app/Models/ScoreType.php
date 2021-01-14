<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ScoreType;

class ScoreType extends Model
{
    use HasFactory;
    protected $filltable = [
        'name'
    ];
    public function scoretype()
    {
        return $this->hasMany(ScoreType::class);
    }
}
