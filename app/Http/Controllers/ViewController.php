<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ViewController extends Controller
{
    //
    public function home()
    {
        return view("home");
    }
    public function product($slug)
    {
        $res = Product::where("slug", $slug);
        return view("product", compact("res"));
    }
    public function cart()
    {
        return view("cart");
    }
    public function order()
    {
        return view("order");
    }
    public function orderdetail()
    {
        return view("orderdetail");
    }
}
