<?php

use Illuminate\Support\Facades\Route;

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

//call product controllers
use App\Http\Controllers\ProductController;


Route::post('/product',[ProductController::class,'store']); 

Route::get('/', function () {
    return view('welcome');
});
