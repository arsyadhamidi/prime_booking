<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LandingBookingController extends Controller
{
    public function index()
    {
        return view('frontend.booking.booking');
    }
}
