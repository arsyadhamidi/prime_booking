<?php

namespace App\Http\Controllers\Dashboard;

use App\Exports\BookingExport;
use App\Models\Review;
use App\Models\Booking;
use App\Models\Layanan;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class DashboardController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();
        $kategoris = Kategori::latest()->get();
        $reviews = Review::latest()->paginate(5);
        $users = Auth::user();
        if ($users->level == 'Admin') {
            return view('admin.dashboard.index');
        } elseif ($users->level == 'Customer') {
            return view('frontend.booking.booking', [
                'layanans' => $layanans,
                'reviews' => $reviews,
                'kategoris' => $kategoris,
            ]);
        } else {
            return redirect('/');
        }
    }

    public function getLayanan($kategori_id)
    {
        $layanans = Layanan::where('kategori_id', $kategori_id)->get();
        return response()->json($layanans);
    }

    public function generateexcel(Request $request)
    {
        $request->validate([
            'tanggal' => 'required'
        ], [
            'tanggal.required' => 'Tanggal wajib diisi'
        ]);

        // Split the 'tanggal' input into start and end dates
        $dates = explode(' - ', $request->tanggal);
        $startDate = $dates[0];
        $endDate = $dates[1];

        // Query bookings within the date range
        $data = Booking::whereBetween('tanggal', [$startDate, $endDate])->latest()->get();

        return Excel::download(new BookingExport($data), 'data-booking.xlsx');
    }
}
