<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;

class AdminTeacherController extends Controller
{
    public function index()
    {
        return view('admin.teacher.index', [
            'title' => 'Data Guru',
            'teacher' => Teacher::with('subject')->get()
        ]);
    }

    public function create()
    {
        return view('admin.teacher.create', [
            'title' => 'Tambah Guru',
            'subject' => Subject::all()
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nam'      => 'required',
            'subject_id' => 'required',
            'phone'    => 'nullable',
            'email'    => 'nullable|email',
            'address'  => 'nullable'
        ]);

        Teacher::create($request->all());

        return redirect()->route('admin.teacher.index')
            ->with('success', 'Data guru berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('admin.teacher.edit', [
            'title' => 'Edit Guru',
            'teacher' => Teacher::findOrFail($id),
            'subject' => Subject::all()
        ]);
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nam'      => 'required',
            'subject_id' => 'required',
            'phone'    => 'nullable',
            'email'    => 'nullable|email',
            'address'  => 'nullable'
        ]);

        $teacher = Teacher::findOrFail($id);
        $teacher->update($request->all());

        return redirect()->route('admin.teacher.index')
            ->with('success', 'Data guru berhasil diperbarui!');
    }

    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);
        $teacher->delete();

        return redirect()->route('admin.teacher.index')
            ->with('success', 'Data guru berhasil dihapus!');
    }
}
