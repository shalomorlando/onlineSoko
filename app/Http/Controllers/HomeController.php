<?php

namespace App\Http\Controllers;
use App\Cart;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Session;
use App\Item;
use Stripe\Stripe;
use Stripe\Charge;

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

    public function getAddToCart(Request $request, $id){
        $product = Item::find($id);
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$product->id);

        $request->session()->put('cart',$cart);
      //  dd($request->session()->get('cart'));
        return redirect()->route('home');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');            
        }

        return redirect()->route('product.shoppingCart');

    }

    public function getRemoveItem($id){
        $oldCart = Session::has('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);

        if(count($cart->items) > 0){
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');            
        }

        return redirect()->route('product.shoppingCart');
    }

    public function getCart()
    {
       if (!Session:: has('cart')) {
           return view('shopping-cart');
       }
       $oldCart = Session::get('cart');
       $cart = new Cart($oldCart);
       return view('shopping-cart', ['products' => $cart->items, 'totalPrice' =>$cart->totalPrice]);
    }

    public function  getCheckout()
    {
        if(!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout', ['total' => $total]);
  }
  public function  getCheckoutmpesa()
    {
        if(!Session::has('cart')) {
            return view('shopping-cart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('checkout-mpesa', ['total' => $total]);
  }

    

public function postCheckout(Request $request){

        if(!Session::has('cart')) {
            return redirect()->route('shoppingCart');
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);

        stripe::setApiKey('sk_test_51H3ACfD4SMHhpFvhANRhxVmezJWbbu0mohseHLy7z
        yIDCOJG8NPU31gtY7jTbokIwmOngIPBXASxgLRukksiF2UW00R85Y67Px');
        try{

            Charge::create(array(

                "amount"=>$cart->totalPrice ,
                "currency"=>"Ksh",
                "source"=> $request->input('stripeToken'),
                "description"=>"Test Charge"
            ));
        } catch (\Exception $exception){

            return redirect()->route('checkout')->with('error',$exception->getMessage());

        }

        Session::forget('cart');
        return redirect()->route('home')->with('success', 'Successfully purchased Products !');

    }
}
