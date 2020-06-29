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

    public function delete(Customer $customer)
    {
        $customer->delete();
        return redirect()->back()->with('mgs', ['Success', 'Customer deleted Successfully!']);
    }
}
