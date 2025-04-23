<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Agen;
use Illuminate\Http\Request;

class AgenController extends Controller
{
    public function index()
    {
        $agen = Agen::latest()->get();
        $respons = [
            'success' => true,
            'message' => 'Daftar agen',
            'data' => $agen,
        ];
        return response()->json($respons, 200);
    }

    public function store(Request $request)
    {
        $agen = new Agen();
        $agen->nama_agen = $request->nama_agen;
        $agen->save();
        return response()->json([
            'sunccess' => true,
            'message' => 'data berhasil disimpan',
        ],201);
    }

    public function show($id)
    {
        $agen = Agen::find($id);
        if($agen){
            $agen->nama_agen = $request->nama_agen;
            $agen->save();
            return response()->json([
                'success' => true,
                'message' => 'detail agen disimpan',
                'data' => $agen,
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data tidak ditemukan',
            ],404);
        }
    }

    public function update(Request $request,$id)
    {
        $agen = Agen::find($id);
        if($agen){
            $agen->nama_agen = $request->nama_agen;
            $agen->save();
            return response()->json([
                'success' => true,
                'message' => 'data berhasil diperbarui',
                'data' => $agen,
            ],200);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data tidak ditemukan',
            ],404);
        }
    }

    public function destroy($id)
    {
        $agen = Agen::find($id);
        if ($agen){
            $agen->delete();
            return response()->json([
                'success' => true,
                'message' => 'data' . $agen->nama_agen . 'berhasil di hapus',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data tidak ditemukan',
            ],404);
        }
    }
}