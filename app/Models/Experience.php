<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Experience extends Model
{
    protected $fillable = ['resume_id', 'company', 'role', 'duration', 'description'];

    public function resume()
    {
        return $this->belongsTo(Resume::class);
    }
}
