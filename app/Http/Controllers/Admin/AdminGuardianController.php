<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Guardian;
use Illuminate\Http\Request;

class AdminGuardianController extends Controller
{
    /**
     * Tampilkan semua data guardian
     */
    public function index()
    {
        return view('admin.guardian.index', [
            'title' => 'Daftar Wali',
            'guardians' => Guardian::all()
        ]);
    }

    /**
     * Form create guardian
     */
    public function create()
    {
        return view('admin.guardian.create', [
            'title' => 'Tambah Wali'
        ]);
    }

    /**
     * Simpan data guardian baru
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'  => 'required|string|max:255',
            'job'   => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email',
        ]);

        Guardian::create($request->all());

        return redirect()
                ->route('admin.guardian.index')
                ->with('success', 'Data wali berhasil ditambahkan!');
    }

    /**
     * Form edit guardian
     */
    public function edit($id)
    {
        return view('admin.guardian.edit', [
            'title' => 'Edit Data Wali',
            'guardian' => Guardian::findOrFail($id)
        ]);
    }

    /**
     * Update guardian
     */
    public function update(Request $request, $id)
    {
        $guardian = Guardian::findOrFail($id);

        $request->validate([
            'name'  => 'required|string|max:255',
            'job'   => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|unique:guardians,email,' . $guardian->id,
        ]);

        $guardian->update($request->all());

        return redirect()
                ->route('admin.guardian.index')
                ->with('success', 'Data wali berhasil diperbarui!');
    }

    /**
     * Hapus guardian
     */
    public function destroy($id)
    {
        Guardian::findOrFail($id)->delete();

        return redirect()
                ->route('admin.guardian.index')
                ->with('success', 'Data wali berhasil dihapus!');
    }
}
