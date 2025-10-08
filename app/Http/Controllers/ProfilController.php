<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index()
    {
        return view('home',[
            'title' => 'home',
            ]);

    }

    
    public function profil()
    {
        $data = [
            'nama' => 'Aditya Jaya',
            'kelas' => '11 PPLG 2',
            'sekolah' => 'SMK RUS',
            'title' => 'profil',
        ];
    
        return view('profil', $data);
    }

}
