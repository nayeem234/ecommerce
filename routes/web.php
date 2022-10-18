<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\custom\ViewController;
use App\Http\Controllers\custom\backendController;
use App\Http\Controllers\custom\customerController;
use App\Http\Controllers\custom\ProductController;
use App\Http\Controllers\custom\orderController;


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

Route::get('/view',[ViewController::class,'index']);
Route::get('/backend',[backendController::class,'backend']);


Route::get('/product',[ProductController::class,'index'])->name('product');
Route::get('productAdd',[ProductController::class,'productAdd'])->name('productAdd');
Route::post('/newAdd',[ProductController::class,'store']);
Route::get('/deleteProduct/{id}',[ProductController::class,'delete']);
Route::get('editPreview/{id}', [ProductController::class,'preview']);
Route::get('editProduct/{id}', [ProductController::class,'edit']);


Route::get('customers',[customerController::class,'index'])->name('customers');
Route::get('customerAdd',[customerController::class,'addform'])->name('customeAdd');
Route::post('Add',[customerController::class,'store']);
Route::get('deleteCustomer/{id}',[customerController::class,'delete']);
Route::get('editPreview/{id}',[customerController::class,'preview'])->name('preview');
Route::get('editCustomer/{id}',[customerController::class,'edit']);

Route::get('orders',[orderController::class,'index'])->name('orders');
Route::get('orderAdd',[orderController::class,'addform'])->name('orderAdd');
Route::post('add',[orderController::class,'store']);
Route::get('deleteOrder/{id}',[orderController::class,'delete']);
Route::get('editPreview/{id}',[orderController::class,'preview'])->name('preview');
Route::get('editOrders/{id}',[customerController::class,'edit']);





Route::get('/', function () {
    return view('welcome');


});


















































































