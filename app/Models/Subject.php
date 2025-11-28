<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama',
        'description',
    ];

    // Relasi: 1 subject dimiliki oleh 1 guru
    public function teacher()
    {
        return $this->hasOne(Teacher::class, 'subject_id');
    }
}
