<?php

namespace App\Models;
use App\Models\Subject;
use App\Models\Teacher;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    /** @use HasFactory<\Database\Factories\TeacherFactory> */
    use HasFactory;
    protected $with = [ 'subject' ];
    public function subject(){
        return $this->belongsTo(Subject::class,'subject_id');
     } 

}
