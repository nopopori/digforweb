<?php

namespace App\Http\Controllers;
use App\Models\Korban;

use Illuminate\Http\Request;

class KorbanController extends Controller
{
     // GET /api/korban  (semua korban)
    public function index()
    {
        return response()->json([
            'message' => 'Daftar korban',
            'data' => Korban::all()
        ]);
    }

    // POST /api/korban  (buat korban baru, hanya petugas)
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string',
            'kontak' => 'required|string',
            'lokasi' => 'required|string',
            'tgl_laporan' => 'required|date',
            'deskripsi_laporan' => 'required|string',
        ]);

        $korban = Korban::create($validated);

        return response()->json([
            'message' => 'Korban berhasil ditambahkan',
            'data' => $korban
        ]);
    }

    // GET /api/korban/{id}
    public function show($id)
    {
        $korban = Korban::find($id);

        if (!$korban) {
            return response()->json(['message' => 'Korban tidak ditemukan'], 404);
        }

        return response()->json([
            'message' => 'Detail korban',
            'data' => $korban
        ]);
    }

    // PUT /api/korban/{id} (update, hanya petugas)
    public function update(Request $request, $id)
    {
        $korban = Korban::find($id);

        if (!$korban) {
            return response()->json(['message' => 'Korban tidak ditemukan'], 404);
        }

        $validated = $request->validate([
            'nama' => 'string',
            'kontak' => 'string',
            'lokasi' => 'string',
            'tgl_laporan' => 'date',
            'deskripsi_laporan' => 'string',
        ]);

        $korban->update($validated);

        return response()->json([
            'message' => 'Data korban berhasil diperbarui',
            'data' => $korban
        ]);
    }

    // DELETE /api/korban/{id} (hapus, hanya petugas)
    public function destroy($id)
    {
        $korban = Korban::find($id);

        if (!$korban) {
            return response()->json(['message' => 'Korban tidak ditemukan'], 404);
        }

        $korban->delete();

        return response()->json([
            'message' => 'Korban berhasil dihapus'
        ]);
    }
}
