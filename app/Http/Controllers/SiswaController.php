<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    // 1. READ - Menampilkan semua data siswa
    public function index()
    {
        $siswa = SiswaModel::all();

        return response()->json([
            'message' => 'Berhasil mengambil data',
            'data' => $siswa
        ]);
    }

    // 2. READ - Menampilkan satu data siswa
    public function show($id)
    {
        $siswa = SiswaModel::find($id);

        if (!$siswa) {
            return response()->json([
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        return response()->json([
            'data' => $siswa
        ]);
    }

    // 3. CREATE - Menambahkan data siswa
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'umur' => 'required'
        ]);

        $siswa = SiswaModel::create($data);

        return response()->json([
            'message' => 'Siswa berhasil ditambahkan',
            'data' => $siswa
        ], 201);
    }

    // 4. UPDATE - Mengubah data siswa
    public function update(Request $request, $id)
    {
        $siswa = SiswaModel::find($id);

        if (!$siswa) {
            return response()->json([
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        $data = $request->validate([
            'nama' => 'required',
            'umur' => 'required',
        ]);

        $siswa->update($data);

        return response()->json([
            'message' => 'Siswa berhasil diubah',
            'data' => $siswa
        ]);
    }

    // 5. DELETE - Menghapus data siswa
    public function destroy($id)
    {
        $siswa = SiswaModel::find($id);

        if (!$siswa) {
            return response()->json([
                'message' => 'Siswa tidak ditemukan'
            ], 404);
        }

        $siswa->delete();

        return response()->json([
            'message' => 'Siswa berhasil dihapus'
        ]);
    }
}
