<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Produk::latest()->get();
        $respons = [
            'success' => true,
            'message' => 'Daftar produk',
            'data' => $produk,
        ];
        return response()->json($respons, 200);
    }

    public function store(Request $request)
    {
        $produk = new Produk();
        $produk->nama_produks = $request->nama_produks;
        $produk->save();
        return response()->json([
            'sunccess' => true,
            'message' => 'data berhasil disimpan',
        ],201);
    }

    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->nama_produk = $request->nama_produk;
            $produk->save();
            return response()->json([
                'success' => true,
                'message' => 'detail produk disimpan',
                'data' => $produk,
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
        $produk = produk::find($id);
        if($produk){
            $produk->nama_produk = $request->nama_produk;
            $produk->save();
            return response()->json([
                'success' => true,
                'message' => 'data berhasil diperbarui',
                'data' => $produk,
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
        $produk = Produk::find($id);
        if ($produk){
            $produk->delete();
            return response()->json([
                'success' => true,
                'message' => 'data' . $produk->nama_produk . 'berhasil di hapus',
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'data tidak ditemukan',
            ],404);
        }
    }
}