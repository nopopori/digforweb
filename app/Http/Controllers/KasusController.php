<?php

namespace App\Http\Controllers;

use App\Models\Kasus;
use Illuminate\Http\Request;

class KasusController extends Controller
{
    public function index()
    {
        return Kasus::with('korban')->get();
    }

    public function show($id)
    {
        $kasus = Kasus::with('korban')->find($id);

        if (!$kasus) {
            return response()->json(['message' => 'Kasus tidak ditemukan'], 404);
        }

        return $kasus;
    }

    public function store(Request $request)
    {
        $request->validate([
            'korban_id' => 'required|exists:korbans,id',
            'jenis_kasus' => 'required|string',
            'tanggal_kejadian' => 'required|date',
            'ringkasan_kasus' => 'required|string',
            'status_kasus' => 'nullable|string'
        ]);

        $kasus = Kasus::create($request->all());

        return response()->json([
            'message' => 'Kasus berhasil dibuat',
            'data' => $kasus
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $kasus = Kasus::find($id);

        if (!$kasus) {
            return response()->json(['message' => 'Kasus tidak ditemukan'], 404);
        }

        $kasus->update($request->all());

        return response()->json([
            'message' => 'Kasus berhasil diperbarui',
            'data' => $kasus
        ]);
    }

    public function destroy($id)
    {
        $kasus = Kasus::find($id);

        if (!$kasus) {
            return response()->json(['message' => 'Kasus tidak ditemukan'], 404);
        }

        $kasus->delete();

        return response()->json([
            'message' => 'Kasus berhasil dihapus'
        ]);
    }
}
