<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class LandingReviewController extends Controller
{
    public function index()
    {
        return view('frontend.review.review');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'ulasan' => 'required',
            'rating' => 'required',
        ], [
            'nama.required' => 'Nama wajib diisi',
            'email.required' => 'Email wajib diisi',
            'ulasan.required' => 'Ulasan wajib diisi',
            'rating.required' => 'Rating wajib diisi'
        ]);

        Review::create($validated);

        return redirect('review')->with('success', 'Selamat! Anda berhasil mengajukan sebuah ulasan');
    }
}
