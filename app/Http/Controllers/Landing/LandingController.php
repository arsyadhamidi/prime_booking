<?php

namespace App\Http\Controllers\Landing;

use App\Models\Review;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->paginate(5);
        return view('frontend.home', [
            'reviews' => $reviews,
        ]);
    }
}
