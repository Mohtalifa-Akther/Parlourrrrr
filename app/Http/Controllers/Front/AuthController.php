<?php

namespace App\Http\Controllers\Front;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{

    public function login(Request $request)
    {
        $credentials = $request->only(['email', 'password']);


        if (Auth::guard('customer')->attempt($credentials)) {
            return redirect('/');
        } else {
            return redirect()->back()->with('login-error', 'Login Invalid');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        $request->session()->regenerate();
        return redirect('/');
    }

    public function register(Request $request)
    {

        if (Customer::where('email', $request->email)->first() != null) {
            return redirect()->back()->with('register-error', 'Email exist');
        }

        $customer = new Customer();
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->phone = $request->phone;
        $customer->address1 = $request->address1;
        $customer->address2 = $request->address2;
        $customer->city = $request->city;
        $customer->country = $request->country;
        $customer->avatar = $request->file('avatar')->store('customers', 'public');
        $customer->password = bcrypt($request->password);
        // dd($request->except('_token'));
        $customer->save();
        return redirect()->back()->with('register-success', 'Successfully Registerd');
    }
}
