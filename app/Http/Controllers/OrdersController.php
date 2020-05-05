<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Order;
use App\Models\Cart;

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

    public function createCart(Request $req, Order $order) {
        if ($order->cart) {
            return ('La orden ya contiene un carrito');
        }

        $cart = new Cart();
        $cart->name = $order->name;
        $cart->order_id = $order->id;
        $cart->save();

        return redirect()->route('orders.index');
    }
}
