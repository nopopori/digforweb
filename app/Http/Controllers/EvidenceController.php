<?php

namespace App\Http\Controllers;

use App\Models\Evidence;
use Illuminate\Http\Request;

class EvidenceController extends Controller
{
    public function index()
    {
        return Evidence::with('kasus')->get();
    }

    public function show($id)
    {
        $evidence = Evidence::with('kasus')->find($id);

        if (!$evidence) {
            return response()->json(['message' => 'Evidence tidak ditemukan'], 404);
        }

        return $evidence;
    }

    public function store(Request $request)
    {
        $request->validate([
            'case_id' => 'required|exists:kasuses,id',
            'jenis_bukti' => 'required|string',
            'lokasi_penyimpanan' => 'required|string',
            'hash_value' => 'required|string',
            'waktu_pengambilan_bukti' => 'required|date'
        ]);

        $evidence = Evidence::create($request->all());

        return response()->json([
            'message' => 'Evidence berhasil ditambahkan',
            'data' => $evidence
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $evidence = Evidence::find($id);

        if (!$evidence) {
            return response()->json(['message' => 'Evidence tidak ditemukan'], 404);
        }

        $evidence->update($request->all());

        return response()->json([
            'message' => 'Evidence berhasil diperbarui',
            'data' => $evidence
        ]);
    }

    public function destroy($id)
    {
        $evidence = Evidence::find($id);

        if (!$evidence) {
            return response()->json(['message' => 'Evidence tidak ditemukan'], 404);
        }

        $evidence->delete();

        return response()->json([
            'message' => 'Evidence berhasil dihapus'
        ]);
    }
}
