<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $users = Auth::user();
        if ($users->level == 'Admin') {
            return view('admin.dashboard.index');
        } elseif ($users->level == 'Customer') {
            return view('frontend.booking.booking');
        }else{
            return redirect('/');
        }
    }
}
