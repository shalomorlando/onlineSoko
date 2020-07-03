<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

use DB;

class ShopController extends Controller
{
    
    public function index()
    { 
      $pagination = 9;
        $products =Item::get();
        return view('shop')->with(['products' => $products]);
        if(request()->sort = 'low_high'){
            $products = $products->orderBy('price');
        }
        else if(request()->sort =='high_low')
        {
            $products = $products->orderBy('price','desc');
        }
       

    }
   
        public function show($name)
    {
        $products = Item::where('name', $name)->firstOrFail();
        $mightAlsoLike = Item::where('name', '!=', $name)->mightAlsoLike()->get();
        $stockLevel = getStockLevel($products->quantity);

        return view('shop')->with([
            'product' => $product,
            'stockLevel' => $stockLevel,
            'mightAlsoLike' => $mightAlsoLike,
        ]);
    }
    
}
