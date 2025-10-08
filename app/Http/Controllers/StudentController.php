<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
    //     $students = [
    //         [
    //             'id' => 1,
    //             'name' => 'naxi',
    //             'grade' => '11 pplg 2',
    //             'gmail' => 'elixir@gmail.com',
    //             'address' => 'grovee street, ohio, us',
    //         ],
    //         [
    //             'id' => 2,
    //             'name' => 'burhan sukarela',
    //             'grade' => '11 pplg 2',
    //             'gmail' => 'burhan@gmail.com',
    //             'address' => 'jl BKR no 8, bandung',
    //         ],
    //         [
    //             'id' => 3,
    //             'name' => 'yanto supreme',
    //             'grade' => '11 pplg 2',
    //             'gmail' => 'cobbic@gmail.com',
    //             'address' => 'jl puspowarno tgh ix 2, jawa tengah',
    //         ],
    //         [
    //             'id' => 4,
    //             'name' => 'irwan kaki lima',
    //             'grade' => '11 pplg 2',
    //             'gmail' => 'balossom@gmail.com',
    //             'address' => 'Jl. Kenanga No. 15, Kel. Melati, Kec. Anggrek, Kota Sejahtera, Jawa Timur 12345. Alamat acak adalah',
    //         ],
    //         [
    //             'id' => 5,
    //             'name' => 'Rudi pengemudi',
    //             'grade' => '11 pplg 2',
    //             'gmail' => 'disinidibataskotaini@gmail.com',
    //             'address' => 'Jl arief rachman hakim 19, Surabaya, Jawa timur',
    //         ],
    //     ];
        
    $students = Student :: all();
       
        return view('student',[
            'title' => 'student',
            'students' => $students
            ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id) //menghapus berdasarkan id
    {
        //
    }
}
