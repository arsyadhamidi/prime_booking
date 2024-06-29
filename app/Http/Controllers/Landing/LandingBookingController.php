<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Layanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LandingBookingController extends Controller
{
    public function index()
    {
        $layanans = Layanan::latest()->get();
        return view('frontend.booking.booking', [
            'layanans' => $layanans,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'layanan_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ], [
            'nama.required' => 'Nama Pelanggan wajib diisi',
            'layanan_id.required' => 'Jenis Layanan wajib diisi',
            'tanggal.required' => 'Tanggal Layanan wajib diisi',
            'jam.required' => 'Jam Layanan wajib diisi'
        ]);

        $validated['users_id'] = Auth::user()->id;
        $validated['keterangan'] = $request->keterangan ?? null;
        $validated['status'] = 'Proses';
        Booking::create($validated);
        return redirect('bookinghome/confirm')->with('success', 'Anda berhasil melakukan booking');
    }

    public function confirm()
    {
        $users = Auth::user();
        $booking = Booking::where('users_id', $users->id)->latest()->first();
        return view('frontend.booking.confirm', [
            'booking' => $booking,
        ]);
    }

    public function updatesetuju($id)
    {
        Booking::where('id', $id)->update([
            'status' => 'Setuju',
        ]);

        return redirect('dashboard')->with('success', 'Anda berhasil setuju dengan syarat dan ketentuan');
    }

    public function updatebatal($id)
    {
        Booking::where('id', $id)->update([
            'status' => 'Batal',
        ]);

        return redirect('dashboard')->with('success', 'Anda berhasil setuju dengan syarat dan ketentuan');
    }

    public function riwayat()
    {
        $users = Auth::user();
        $booking = Booking::where('users_id', $users->id)->latest()->get();
        return view('frontend.booking.riwayat', [
            'bookings' => $booking,
        ]);
    }
}
