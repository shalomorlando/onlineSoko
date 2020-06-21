<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;
use DB;
use App\Item;

class Controller extends BaseController
{
    //use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function index()
    {
        return view('additems');
    }
    public function store(Request $request)
    {
        $item = new Item();
        $item->quantity=$request->input('store');
        $item->name=$request->input('name');
        $item->description=$request->input('description');
        $item->quantity=$request->input('quantity');
        $item->price=$request->input('price');
               /*storing image*/
       if($request->hasfile('image'))
       {
           $file=$request->file('image');
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
        return view('additems')->with('item', $item );
    }
    public function display()
    {
        $items = Item::all();
        return view('viewform')->with('items', $items);
    }
    public function edit($id)
    {
        $items = Item::find($id);
        return view('updateform')->with('items', $items);
    }
    public function update(Request $request, $id)
    {
        $items = Item::find($id);
        $items->name=$request->input('name');
        $items->description=$request->input('description');
        $items->quantity=$request->input('quantity');
        $items->price=$request->input('price');
               /*storing image*/
       if($request->hasfile('image'))
       {
           $file=$request->file('image');
           $extension=$file->getClientOriginalExtension();//image extension
           $filename=time().'.'.$extension;
           $file->move('uploads/pictures/', $filename);
           $items->image=$filename;
       }
        $items->save();
        echo "Saved Successfully";
        
        return redirect('/viewpage')->with('items', $items );
    }
    public function delete($id)
    {
        $items=Item::find($id);
        $items->delete();
        return redirect('/viewpage')->with('items', $items );
    }
}