<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Student;
use App\Models\Guardian;
use App\Models\Classroom;
use App\Models\Teacher;
use App\Models\Subject;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        // User::factory(10)->create();

        //User::factory(10)->create();
       // Student::factory()->count(5)->create();
        Guardian::factory()->count(5)->create();
        Classroom::factory(4)->
        hasStudents(5)
        ->create();
        Teacher::factory(6)->hasSubject(6)->create();
       // Subject::factory(5)->hasTeacher(6)->create();
    }
}
