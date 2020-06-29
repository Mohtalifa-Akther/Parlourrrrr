<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Booking;
use App\Customer;
use App\Order;

class ProfileController extends Controller
{


    public function profile()
    {
        $data['customer']= Customer::find(auth()->guard('customer')->user()->id);
        return view('front.profile.profile',$data);

    }

    public function profileUpdate(Request $request, Customer $customer)
    {
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;
        $customer->city = $request->city;
        $customer->country = $request->country;
        if ($request->hasFile('avatar')) {
            $customer->avatar = $request->file('avatar')->store('customers', 'public');
        }
        if ($customer->password != $request->password) {
            $customer->password = bcrypt($request->password);
        }
        // dd($request->except('_token'));
        $customer->save();

        return redirect()->back()->with('profile_update', 'Successfully Registerd');
    }
    public function my_bookings()
    {
        $data['bookings'] = Booking::where('customer_id',auth()->guard('customer')->user()->id)->orderBy('id','desc')->get();
        return view('front.profile.my_bookings',$data);
    }
    public function my_orders()
    {
        $data['orders'] = Order::where('customer_id',auth()->guard('customer')->user()->id)->orderBy('id','desc')->get();
        return view('front.profile.my_orders',$data);
    }
}
