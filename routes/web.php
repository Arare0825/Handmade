<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlofileController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\SellController;
use App\Http\Controllers\CommentController;


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

Route::get('/dashboard', function () {
    return view('Plofile.myPage');
})->middleware(['auth'])->name('dashboard');

Route::resource('Plofile', PlofileController::class);


Route::get('/products',[ProductsController::class,'index'])->middleware('auth')->name('products.index');
Route::get('/products/{id}',[ProductsController::class,'show'])->middleware('auth')->name('products.show');
Route::get('/products//buy/{id}',[ProductsController::class,'buy'])->middleware('auth')->name('products.buy');

Route::resource('Sell', SellController::class)->middleware('auth');

// Route::resource('comment', CommentController::class)->only('index','store','show')->middleware('auth');

// Route::get('/comment/{id}',[CommentController::class,'store'])->middleware('auth')->name('comment.store');
Route::post('/comment',[CommentController::class,'store'])->middleware('auth')->name('comment.store');

// Route::get('/comment//buy/{id}',[CommentController::class,'buy'])->middleware('auth')->name('comment.buy');


require __DIR__.'/auth.php';
