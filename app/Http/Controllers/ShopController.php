<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use DB;

class ShopController extends Controller
{
    
    public function index()
    {
        $products = items::inRandomOrder()->take(4)->get();
        return view('shop')->with('products',$products);
    }
    public function show()
    {
        
    }
}
