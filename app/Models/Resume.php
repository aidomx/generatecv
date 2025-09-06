<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resume extends Model
{
    protected $fillable = [
        // Data utama
        'name',
        'email',
        'phone',
        'photo',

        // Data pribadi
        'birth_place',
        'birth_date',
        'address',
        'gender',
        'religion',
        'marital_status',
        'height',
        'weight',
        'blood_type',
        'nationality'
    ];

    
    public function experiences() {
        return $this->hasMany(Experience::class);
    }

    public function educations() {
        return $this->hasMany(Education::class);
    }

    public function skills() {
      return $this->hasMany(Skill::class);
    }
}
