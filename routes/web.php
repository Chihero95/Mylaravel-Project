<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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
Route::get('/abc', function () {
    return view('abc', ["name" => "Chiii", "age" => 18]);
});
Route::get('/home', function () {
    return view('home');
});

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/product/list', [ProductController::class, 'index']);
Route::get('/', [ProductController::class, 'index']);

Route::get('/product/show/{id}', [ProductController::class, 'show']);
//create form
Route::get('/product/create',[ProductController::class, 'create'] );
//insert form
Route::post('/product/store',[ProductController::class, 'store'] )->name('product-store');
//show
Route::get('/product/show/{id}',[ProductController::class, 'show'] )->name('product-show');


//update form
Route::post('/product/update',[ProductController::class, 'update'])->name('product-update');

Route::get('/product/delete/{id}',[ProductController::class, 'delete'] )->name('product-delete');
