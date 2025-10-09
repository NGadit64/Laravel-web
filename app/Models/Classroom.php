<?php

namespace App\Models;

use App\Models\Student;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    /** @use HasFactory<\Database\Factories\ClassroomFactory> */
    use HasFactory;

    public function students(){
        return $this->hasMany(Student::class, 'classroom_id');
    } 
}
//php artisan migrate:fresh --seed 
//php artisan make:model Guardian -mfscr

//php artisan migrate:rollback      
//php artisan migrate:refresh --seed  
//php artisan db:seed --class=StudentSeeder
//php artisan make:model Student -mf   
//php artisan make:controller StudentController --resource
//php artisan make:controller StudentController    
//php artisan make:components NavLinkMobile                 
//php artisan make:components nav-link-mobile
//git add .

//git commit -m "Update tampilan tabel student dan tambah relasi classroom"
//git push
//git push origin main
