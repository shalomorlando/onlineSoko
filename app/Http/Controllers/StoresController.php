<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class StoresController extends Controller
{
    //
    public function index(){
        $items = Item::all();        
        return view ('store', ['items'=>$items]);
    }

    public function create()
    {
        return view('storeAddItems');
    }
    
    public function store(Request $request)
    {
        $item = new Item();
        
        $item->name = $request->input('productName');
        $item->description = $request->input('productDescription');
        $item->quantity = $request->input('productQuantity');
        $item->price = $request->input('productPrice');
               /*storing image*/
       if($request->hasfile('productImage'))
       {
           $file=$request->file('productImage');
           $extension=$file->getClientOriginalExtension();//image extension
           $filename=time().'.'.$extension;
           $file->move('uploads/pictures/', $filename);
           $item->image=$filename;
       }
       else
       {
           return $request;
           $item->image='';
       }
        $item->save();
        $items = Item::all();  
        return view ('store', ['items'=>$items]);
    }

    public function display(){
        return view('storeReports');
    }

}
