<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'education',
        'experience',
        'skills',
    ];
}
