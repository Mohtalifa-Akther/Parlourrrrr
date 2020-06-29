<?php

namespace App\Http\Controllers\Admin;

use App\Customer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $data['customers'] = Customer::get()->take(6);
        $data['new_customers'] = Customer::whereDate('created_at', Carbon::today())->get()->count();
        return view('admin.pages.dashboard', $data);
    }
}
