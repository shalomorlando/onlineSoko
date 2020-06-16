<?php

use Illuminate\Support\Facades\Route;
Use App\Product;


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

Route::get('/', function () {
    $products = Product::all();
    return view('index',['products'=>$products]);
});

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

/* new example
Route::get('/item', 'controller@allitems');
Route::get('/item', 'controller@addform1');
Route::post('/item_model','controller@add');
*/
