<?php

namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Kategori;
use App\Models\Layanan;
use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class LandingBookingController extends Controller
{
    public function index()
    {
        $reviews = Review::latest()->get();
        $kategoris = Kategori::latest()->get();
        $layanans = Layanan::latest()->paginate(5);
        return view('frontend.booking.booking', [
            'layanans' => $layanans,
            'reviews' => $reviews,
            'kategoris' => $kategoris,
        ]);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'kategori_id' => 'required',
            'layanan_id' => 'required',
            'tanggal' => 'required',
            'jam' => 'required',
        ], [
            'nama.required' => 'Nama Pelanggan wajib diisi',
            'kategori_id.required' => 'Kategori Layanan wajib diisi',
            'layanan_id.required' => 'Jenis Layanan wajib diisi',
            'tanggal.required' => 'Tanggal Layanan wajib diisi',
            'jam.required' => 'Jam Layanan wajib diisi'
        ]);

        $validated['users_id'] = Auth::user()->id;
        $validated['keterangan'] = $request->keterangan ?? null;
        $validated['status'] = 'Proses';
        $bookings = Booking::where('tanggal', $request->tanggal)->where('jam', $request->jam)->first();
        if (!empty($bookings)) {
            return back()->with('error','Mohon maaf, Booking pada hari dan jam ini sudah penuh, silahkan direschedule kembali');
        }
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

    public function generatepdf($id)
    {
        $booking = Booking::where('id', $id)->first();

        $pdf = PDF::loadview('frontend.booking.export-pdf', ['booking' => $booking])->setPaper('A4', 'Potrait');
        // return $pdf->download('booking.pdf');
        return $pdf->stream('booking.pdf');
    }
}
