<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cinema;
use Illuminate\Support\Facades\Validator;

class CinemaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cinemas = Cinema::all();
        return response()->json([
            'status' => true,
            'message' => 'Data Berhasil Ditemukan',
            'data' => $cinemas
        ]);
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|url',  // Gambar harus berupa URL
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'booking_date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'genre' => 'required|string|max:100',
            'available_seats' => 'required|integer|min:1',
            'harga_tiket' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors()
            ], 422);
        }

        $cinemas = Cinema::create($request->all());
        return response()->json([
            'status' => true,
            'message' => 'data berhasil dimasukkan',
            'data' => $cinemas
        ], 201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $cinemas = Cinema::findOrFail($id);
        return response()->json([
            'status' => 'true',
            'message' => 'Data berhasil ditemukan',
            'data' => $cinemas
        ]);
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validator = Validator::make($request->all(), [
            'image' => 'required|url',  // Gambar harus berupa URL
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'booking_date' => 'required|date',
            'duration' => 'required|integer|min:1',
            'genre' => 'required|string|max:100',
            'available_seats' => 'required|integer|min:1',
            'harga_tiket' => 'required|numeric|min:0',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'validasi error',
                'errors' => $validator->errors()
            ], 422);
        }

        $cinemas = Cinema::findOrFail($id);
        $cinemas->update($request->all());
        return response()->json([
            'status' => true,
            'message' => 'data berhasil diedit',
            'data' => $cinemas
        ], 200);
        //
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $cinemas = Cinema::findOrFail($id);
        $cinemas->delete();
        return response()->json([
            'status' => 'true',
            'message' => 'Data berhasil dihapus',
        ], 204);
        //
    }
}
