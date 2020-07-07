<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Item;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $products = Item::all();
        return view('home')->with('products', $products);
    }

}
