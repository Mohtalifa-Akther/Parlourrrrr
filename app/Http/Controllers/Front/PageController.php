<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Package;
use App\Service;
use App\Employee;
use App\Booking;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $data['packages'] = Package::get()->take(4);
        $data['services'] = Service::get()->take(4);
        return view('front.pages.home', $data);
    }


    public function sign_up()
    {
        return view('front.pages.signup');
    }

    public function bookings()
    {
        return view('front.pages.booking');
    }

    public function about()
    {
        $data['employees'] = Employee::all();
        return view('front.pages.about',$data);
    }
    public function service()
    {
        return view('front.pages.services');
    }
    public function product()
    {
        $data['products'] = \App\Product::all();
        return view('front.pages.products',$data);
    }
    public function gallery()
    {
        return view('front.pages.gallery');
    }

    public function packages()
    {
        return view('front.pages.packages');
    }
    public function contact()
    {
        return view('front.pages.contact');
    }

    public function sendbookings(Request $request)
    {
        $booking = new Booking();
        $booking->customer_id = auth()->guard('customer')->user()->id;
        $booking->booking_date = $request->booking_date;
        $booking->package_id = $request->package_id;
        $booking->save();
        return redirect()->back()->with('booking-success');
    }

    public function checkouts()
    {

    }


    public function orders()
    {

    }

    public function payments()
    {

    }

    public function sendOrder(Request $request){
        $order = new Order();
        $order->customer_id = auth()->guard('customer')->user()->id;
        $order->total = $request->total;
        $order->paid_by = $request->paid_by;
        $order->delivery_address = $request->delivery_address != ""? $request->delivery_address : auth()->guard('customer')->user()->address1;
        $order->save();

        $order->products()->attach($request->products);
        return redirect()->back()->with('order-success');
    }


}
