<?php

namespace App\Models;

use App\Models\Classroom;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    /** @use HasFactory<\Database\Factories\StudentFactory> */
    use HasFactory;

    public function classroom() {
        return $this->belongsTo(Classroom::class, 'classroom_id');
    }
}
