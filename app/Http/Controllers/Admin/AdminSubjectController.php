<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\Subject;
use Illuminate\Http\Request;


class AdminSubjectController extends Controller
{
    public function index()
    {
        return view('admin.subject.index', [
            'title' => 'Daftar Subject',
            'subjects' => Subject::all()
        ]);
    }

    public function create()
    {
        return view('admin.subject.create', [
            'title' => 'Tambah Subject'
        ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'description' => 'nullable'
        ]);

        Subject::create($request->all());

        return redirect()->route('admin.subject.index')->with('success', 'Subject berhasil ditambahkan!');
    }

    public function edit($id)
    {
        return view('admin.subject.edit', [
            'title' => 'Edit Subject',
            'subject' => Subject::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $subject = Subject::findOrFail($id);
        $subject->update($request->all());

        return redirect()->route('admin.subject.index')->with('success', 'Subject berhasil diupdate!');
    }

    public function destroy($id)
    {
        Subject::destroy($id);
        return redirect()->route('admin.subject.index')->with('success', 'Subject berhasil dihapus!');
    }
}
