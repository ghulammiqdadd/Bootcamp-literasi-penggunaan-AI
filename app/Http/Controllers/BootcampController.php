<?php
// app/Http/Controllers/BootcampController.php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kuesioner;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function storeKuesioner(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'email' => 'required|email',
            'institusi' => 'required|string|max:255',
            'q1' => 'required|integer|min:1|max:5',
            'q2' => 'required|integer|min:1|max:5',
            'q3' => 'required|integer|min:1|max:5',
            'q4' => 'required|integer|min:1|max:5',
            'feedback' => 'nullable|string'
        ]);

        Kuesioner::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Terima kasih! Kuesioner Anda telah berhasil dikirim.'
        ]);
    }

    public function hasilKuesioner()
    {
        $stats = Kuesioner::selectRaw('
            AVG(q1) as avg_q1,
            AVG(q2) as avg_q2,
            AVG(q3) as avg_q3,
            AVG(q4) as avg_q4,
            COUNT(*) as total_responden
        ')->first();

        return response()->json($stats);
    }
}