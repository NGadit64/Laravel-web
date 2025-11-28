<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Student;
use App\Models\Classroom;
use Illuminate\Http\Request;

class AdminStudentController extends Controller
{
    public function index()
    {
        $students = Student::with('classroom')->get();

        return view('admin.student.index', [
            'title' => 'Data Siswa',
            'students' => $students
        ]);
    }

    public function create()
    {
        return view('admin.student.create', [
            'title' => 'Tambah Siswa',
            'classrooms' => Classroom::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'         => 'required',
            'birthday'     => 'required|date',
            'gender'       => 'required',
            'classroom_id' => 'required',
            'email'        => 'nullable|email',
            'address'      => 'nullable',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.student.index')
            ->with('success', 'Data siswa berhasil ditambahkan!');
    }


    public function edit($id)
    {
        return view('admin.student.edit', [
            'title'      => 'Edit Siswa',
            'student'    => Student::findOrFail($id),
            'classrooms' => Classroom::all()
        ]);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name'         => 'required',
            'birthday'     => 'required|date',
            'gender'       => 'required',
            'classroom_id' => 'required',
            'email'        => 'nullable|email',
            'address'      => 'nullable',
        ]);

        $student = Student::findOrFail($id);
        $student->update($request->all());

        return redirect()->route('admin.student.index')
            ->with('success', 'Data siswa berhasil diperbarui!');
    }

    /** ================================
     *        DELETE SISWA
     *  ================================ */
    public function destroy($id)
    {
        Student::findOrFail($id)->delete();

        return redirect()->route('admin.student.index')
            ->with('success', 'Data siswa berhasil dihapus!');
    }
}
