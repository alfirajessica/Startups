<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

// Route::get('/', function () {
//     return view('index');
// });

// laravel versi 8 pakai ini routingnya
//--> Route::get('/home', 'App\Http\Controllers\HomeController@home')->name('home');
//--> Route::get('/home',[HomeController::class, 'home'])->name('home');

Route::get(
    '/home',
    [HomeController::class, 'home']
)->name('home');

    
Route::get('/', function () {
        return view('index');
    });



//buyer

//investor

//admin
