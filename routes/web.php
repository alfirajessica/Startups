<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;

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

// Route::get(
//     '/home',
//     [HomeController::class, 'home']
// )->name('home');

//index -- first page 
Route::get('/', function () {
        return view('index');
    });

Route::get(
        '/auth/register',
        [UserAuthController::class, 'register']
    )->name('auth.register');

Route::get(
        '/auth/login',
        [UserAuthController::class, 'login']
    )->name('auth.login');

//save to DB, for table=Users, 
//the method is POST --- register
Route::POST(
        '/auth/save',
        [UserAuthController::class, 'save']
    )->name('auth.save');

//check in DB, for table=Users, 
//the method is POST -- login
Route::POST(
    '/auth/check',
    [UserAuthController::class, 'check']
)->name('auth.check');





















// Route::get(
//         '/auth/login',
//         [UserAuthController::class, 'login']
//     )->name('auth.login');

// Route::get(
//         '/auth/register',
//         [UserAuthController::class, 'register']
//     )->name('auth.register');

// Route::get(
//         '/auth/save',
//         [UserAuthController::class, 'save']
//     )->name('auth.save');



//request -> create -> UserAuth
// Route::post(
//         'create',
//         [UserAuthController::class, 'create']
//     )->name('auth.create');

// Route::post(
//         'check',
//         [UserAuthController::class, 'check']
//     )->name('auth.check');

// Route::get(
//         'home',
//         [UserAuthController::class, 'home']
//     );

//buyer

//investor

//admin
