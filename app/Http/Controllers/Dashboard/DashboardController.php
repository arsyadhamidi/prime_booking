<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Review;
use App\Models\Layanan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();
        $reviews = Review::latest()->paginate(5);
        $users = Auth::user();
        if ($users->level == 'Admin') {
            return view('admin.dashboard.index');
        } elseif ($users->level == 'Customer') {
            return view('frontend.booking.booking', [
                'layanans' => $layanans,
                'reviews' => $reviews,
            ]);
        }else{
            return redirect('/');
        }
    }
}
