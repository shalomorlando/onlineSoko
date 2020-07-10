<?php

use Illuminate\Support\Facades\Route;
Use App\Item;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


//Walela's and Josh's routes
Route::get('/', function () {
    $products = Item::all();
    return view('index')->with('products', $products);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/add-to-cart/{id}',[
    'uses'=>'HomeController@getAddToCart', 'as'=> 'product.addToCart']);

Route::get('/reduce/{id}', [
    'uses'=>'HomeController@getReduceByOne',
    'as' => 'product.reduceByOne'
]);

Route::get('/remove/{id}', [
    'uses'=>'HomeController@getRemoveItem',
    'as' => 'product.remove'
]);
Route::get('/shopping-cart',[
    'uses'=>'HomeController@getCart', 'as'=> 'product.shoppingCart']);

Route::get('/checkout', [ 'uses' => 'HomeController@getCheckout',
    'as'=> 'checkout']);

Route::get('/checkout-mpesa', [ 'uses' => 'HomeController@getCheckoutmpesa',
    'as'=> 'checkout-mpesa']);   
Route::post('/checkout',[
    'uses' => 'HomeController@postCheckout',
    'as' => 'checkout']);

//New experimental routes by Shalom and Nirel
Route::get('/store/storefront', 'StoresController@index');
Route::get('/store/createproduct', 'StoresController@create');
Route::get('/store/reports', 'StoresController@display');
Route::post('/store/storefront', 'StoresController@store');
Route::view('message', 'message');


//Esther's and Alvin's routes
Route::get('/mystore', function () {
    return view('mystore');
});
Route::get('/side', function () {
    return view('sidebar');
});
Route::get('/addrecord', 'controller@index');
Route::post('/addimage','controller@store')->name('addimage');
Route::get('/viewpage', 'controller@display');
/*edit table*/
Route::get('/editimage/{id}', 'controller@edit');
Route::put('/updateimage/{id}', 'controller@update');
//delete content
Route::get('/deleteimage/{id}','controller@delete');

/* new example
Route::get('/item', 'controller@allitems');
Route::get('/item', 'controller@addform1');
Route::post('/item_model','controller@add');
*/
//Mitchell and Adah's routes
Route::get('/shop', function(){
    $products = Item::all();
    return view('shop')->with('products', $products);

});
Route::get('/shop/{product}', 'ShopController@show')->name('shop.show');


//Kinda and Kiai's routes
Route::view('newsletter','newsletter');
Route::post('submit','NewsletterController@save');





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
