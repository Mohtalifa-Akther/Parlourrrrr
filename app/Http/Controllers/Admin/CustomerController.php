<?php

namespace App\Http\Controllers\Admin;


use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index()
    {
        $data['customers'] = Customer::orderBy('id', 'desc')->paginate(15);
        return view('admin.customer.index', $data);
    }

    public function unblock(Customer $customer)
    {
        $customer->active = 1;
        $customer->save();
        return redirect()->back()->with('mgs', ['Success', 'Customer Unblocked Successfully!']);
    }

        public function block(Customer $customer)
    {
        $customer->active = 0;
        $customer->save();
        return redirect()->back()->with('mgs', ['Success', 'Customer Blocked Successfully!']);
    }

    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect()->back()->with('mgs', ['Success', 'Customer deleted Successfully!']);
    }
}
