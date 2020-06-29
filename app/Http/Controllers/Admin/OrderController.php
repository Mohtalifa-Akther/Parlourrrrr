<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        $data['orders'] = Order::orderBy('id', 'desc')->paginate(15);
        return view('admin.order.index', $data);
    }

    public function pending()
    {
        $data['orders'] = Order::where('status', 'pending')->orderBy('id', 'desc')->get();
        return view('admin.order.pending', $data);
    }

    public function show(Order $order)
    {
        return view('admin.order.show', compact('order'));
    }

    public function changeStatus(Order $order, $status)
    {
        $order->status = $status;
        $order->save();
        return redirect()->back()->with('mgs', ['Success', 'Order updated Successfully!']);
    }

    public function delete(Order $order)
    {
        $order->delete();
        return redirect()->back()->with('mgs', ['Success', 'Order deleted Successfully!']);
    }
}
