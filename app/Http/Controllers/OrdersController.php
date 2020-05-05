<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;

class OrdersController extends Controller
{
    public function index(Request $req) {
        $orders = Order::all();
        return view('orders.index', ['orders' => $orders]);
    }

    public function create(Request $req) {
        return view('orders.create');
    }

    public function store(Request $req) {
        $all = $req->all();
        unset($all['_token']);
        Order::create($all);
        return redirect()->route('orders.index');
    }
}
