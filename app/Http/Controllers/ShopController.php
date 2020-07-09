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
   
     /**
     * Display the specified resource.
     *
     * @param  string  $id
     * @param  string  $id1
     * @return \Illuminate\Http\Response
     */
        public function show($id)
    {
        $product = Item::where('id', $id)->get();
        $mightAlsoLike = Item::where('id', '!=', $id)->get();

        return view('product')->with(['product'=> $product, 'mightAlsoLike' => $mightAlsoLike]);
    }
    
   
    
}
