<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cart;

class CartsController extends Controller
{
    public function index(Request $req) {
        $carts = Cart::all();
        return view('carts.index', ['carts' => $carts]);
    }
}
