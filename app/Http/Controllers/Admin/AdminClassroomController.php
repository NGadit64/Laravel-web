<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminClassroomController extends Controller
{
    public function index()
    {
        $title = "Daftar Kelas";
        $classrooms = Classroom::all();
        return view('admin.classroom.classroom', compact('title', 'classrooms'));
    }
    public function create()
    {
        return view('admin.classroom.create', [
            'title' => 'Tambah Kelas'
        ]);
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'kelas' => 'required|string|max:100',
        ]);

        Classroom::create(['kelas' => $request->kelas]);

        return redirect()->route('admin.classroom.index')->with('success', 'Kelas berhasil ditambahkan!');
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
    public function edit($id)
{
    $classroom = Classroom::findOrFail($id);
    return view('admin.classroom.edit', compact('classroom'));
}


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $request->validate([
        'kelas' => 'required|string|max:255'
    ]);

    $classroom = Classroom::findOrFail($id);
    $classroom->update([
        'kelas' => $request->kelas
    ]);

    return redirect()->route('admin.classroom.index')
        ->with('success', 'Data kelas berhasil diperbarui.');
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
{
    $classroom = Classroom::findOrFail($id);
    $classroom->delete();

    return redirect()->route('admin.classroom.index')
        ->with('success', 'Data kelas berhasil dihapus.');
}

}
