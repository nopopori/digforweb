<?php

namespace App\Http\Controllers;

use App\Models\TIndakanForensik;
use Illuminate\Http\Request;

class TindakanForensikController extends Controller
{
    public function index()
    {
        return TIndakanForensik::with('kasus')->get();
    }

    public function show($id)
    {
        $data = TIndakanForensik::with('kasus')->find($id);

        if (!$data) {
            return response()->json(['message' => 'Tindakan tidak ditemukan'], 404);
        }

        return $data;
    }

    public function store(Request $request)
    {
        $request->validate([
            'case_id' => 'required|exists:kasuses,id',
            'tahap_forensik' => 'required|in:identification,preservation,collection,examination,documentation,presentation',
            'desk_tindakan' => 'nullable|string',
            'waktu_pelaksanaan' => 'nullable|date',
            'pic' => 'required|string',
            'status_tindakan' => 'required|in:completed,pending'
        ]);

        // checklist otomatis
        $checklist = $request->status_tindakan === 'completed';

        $data = TIndakanForensik::create([
            ...$request->all(),
            'checklist' => $checklist
        ]);

        return response()->json([
            'message' => 'Tindakan forensik berhasil ditambahkan',
            'data' => $data
        ], 201);
    }

    public function update(Request $request, $id)
    {
        $data = TIndakanForensik::find($id);

        if (!$data) {
            return response()->json(['message' => 'Tindakan tidak ditemukan'], 404);
        }

        // checklist otomatis saat update
        $checklist = $request->status_tindakan === 'completed';

        $data->update([
            ...$request->all(),
            'checklist' => $checklist
        ]);

        return response()->json([
            'message' => 'Tindakan forensik berhasil diperbarui',
            'data' => $data
        ]);
    }

    public function destroy($id)
    {
        $data = TIndakanForensik::find($id);

        if (!$data) {
            return response()->json(['message' => 'Tindakan tidak ditemukan'], 404);
        }

        $data->delete();

        return response()->json(['message' => 'Tindakan forensik berhasil dihapus']);
    }
}
