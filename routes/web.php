<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlofileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\BuyController;
use App\Http\Controllers\LikeController;
use App\Http\Controllers\FavoriteController;


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
    return view('welcome');
});


// Route::resource('Plofile', PlofileController::class);
// Route::get('/profile',[PlofileController::class,'name'])->middleware('auth')->name('plofile.name');
Route::get('/profile',[PlofileController::class,'index'])->middleware('auth')->name('plofile.index');
Route::get('/profile/setting',[PlofileController::class,'setting'])->middleware('auth')->name('plofile.setting');
Route::post('/profile/store',[PlofileController::class,'store'])->middleware('auth')->name('plofile.store');

Route::get('/dashboard', function () {
    return route('plofile.index');
})->middleware(['auth']);

Route::get('/products',[ProductsController::class,'index'])->middleware('auth')->name('products.index');
Route::get('/products/{id}',[ProductsController::class,'show'])->middleware('auth')->name('products.show');
Route::get('/products//buy/{id}',[ProductsController::class,'buy'])->middleware('auth')->name('products.buy');
Route::get('/products/redirect',[ProductsController::class,'redirect'])->middleware('auth')->name('products.redirect');

Route::get('/like/{id}',[LikeController::class,'like'])->name('like');
Route::get('/dislike/{id}',[LikeController::class,'dislike'])->name('dislike');

Route::get('/favorite',[FavoriteController::class,'index'])->middleware('auth')->name('favorite.index');



Route::resource('Sell', SellController::class)->middleware('auth');

// Route::resource('comment', CommentController::class)->only('index','store','show')->middleware('auth');

// Route::get('/comment/{id}',[CommentController::class,'store'])->middleware('auth')->name('comment.store');
Route::post('/comment',[CommentController::class,'store'])->middleware('auth')->name('comment.store');

//Stripe
Route::get('buy/index',[BuyController::class,'index'])->name('buy.index')->middleware('auth');
Route::post('buy/checkout',[BuyController::class,'checkout'])->name('buy.checkout')->middleware('auth');
Route::post('buy/complete',[BuyController::class,'complete'])->name('buy.complete')->middleware('auth');
Route::get('success',[BuyController::class,'success'])->name('buy.success')->middleware('auth');
    // Route::get('checkout',[BuyController::class,'checkout'])->name('buy.checkout');


// Route::get('/comment//buy/{id}',[CommentController::class,'buy'])->middleware('auth')->name('comment.buy');


require __DIR__.'/auth.php';
