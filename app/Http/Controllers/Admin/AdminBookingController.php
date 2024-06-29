<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;

class AdminBookingController extends Controller
{
    public function index()
    {
        $booking = Booking::latest()->get();
        return view('admin.booking.index', [
            'bookings' => $booking,
        ]);
    }
}
