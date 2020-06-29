<?php

namespace App\Http\Controllers\Admin;

use App\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $data['bookings'] = Booking::orderBy('id', 'desc')->paginate(15);
        return view('admin.booking.index', $data);
    }

    public function pending()
    {
        $data['bookings'] = Booking::where('status', 'pending')->orderBy('id', 'desc')->get();
        return view('admin.booking.pending', $data);
    }

    public function changeStatus(Booking $booking, $status)
    {
        $booking->status = $status;
        $booking->save();
        return redirect()->back()->with('mgs', ['Success', 'Booking updated Successfully!']);
    }

    public function delete(Booking $booking)
    {
        $booking->delete();
        return redirect()->back()->with('mgs', ['Success', 'Booking deleted Successfully!']);
    }
}
