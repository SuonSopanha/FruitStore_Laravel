<?php

use App\Http\Controllers\FruitController;
use App\Models\Fruit;
use App\Models\FruitList;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



//test test

// Route::get('/Hello', function () {
//     return response('<h1>Hello, World!</h1>', 200)
//     ->header('Content-Type', 'text/plain')
//     ->header('foo','bar');
// });

// Route::get('/post/{id}',function($id){
//     return response('<h1>Hello, Post!'.$id.'</h1>', 200);

// })->where('id','[0-9]+');

// Route::get('/search',function(Request $request){
//     dd($request);
//     return $request->name . ' ' . $request->city;
// });


//All listing
Route::get('/', [FruitController::class, 'index']);


//Single listing
Route::get('/fruit/{id}', [FruitController::class, 'show']);

//Alternative version of single listing
// Route::get('/fruit/{fruit}', function(Fruit $fruit) {
//     return view('fruit', [
//         'fruit' => $fruit
//     ]);
// });

//cart

Route::get('/cart', function () {
    return view('cart');
});
