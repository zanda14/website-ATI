<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        $reviews = Review::where('is_approved', true)->latest()->get();

        return view('review', compact('reviews'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:100'],
            'perusahaan'   => ['nullable', 'string', 'max:100'],
            'layanan'      => ['required', 'array', 'min:1'],
            'rating'       => ['required', 'integer', 'min:1', 'max:5'],
            'ulasan'       => ['required', 'string', 'min:10', 'max:1000'],
        ], [
            'nama_lengkap.required' => 'Nama lengkap wajib diisi.',
            'layanan.required'      => 'Pilih minimal satu layanan.',
            'rating.required'       => 'Pilih rating bintang terlebih dahulu.',
            'ulasan.required'       => 'Ulasan wajib diisi.',
            'ulasan.min'            => 'Ulasan minimal 10 karakter.',
        ]);

        Review::create([
    'nama_lengkap' => $request->nama_lengkap,
    'perusahaan'   => $request->perusahaan,
    'layanan'      => $request->layanan,
    'rating'       => $request->rating,
    'ulasan'       => $request->ulasan,
    'is_approved'  => true, 
]);

        return redirect()->route('review')->with('review_success', true);
    }
}