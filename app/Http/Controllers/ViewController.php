<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    public function home()
    {
        $product = Product::paginate(8);
        return view("home", compact("product"));
    }
    public function product($slug)
    {
        $res = Product::where("slug", $slug)->first();
        return view("product", compact("res"));
    }
    public function cart()
    {
        // $data = Cart::find("user_id", auth()->user()->id());
        $data = Cart::all();
        return view("cart", compact("data"));
    }
    public function account()
    {
        // $data = Order::find("user_id", auth()->user()->id());
        $data = Order::all();
        return view("account");
    }
}
