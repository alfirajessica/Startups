<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\ValuationToolController;

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

Route::get(
    '/auth/logout',
    [UserAuthController::class, 'logout']
)->name('auth.logout');

// -----------------------------forget password ------------------------------
Route::get(
    '/auth/forgetPass',
    [UserAuthController::class, 'getEmail']
)->name('auth.forgetPass');

Route::POST(
    '/auth/forgetPass',
    [UserAuthController::class, 'postEmail']
)->name('auth.forgetPass');


Route::get(
    '/auth/resetPass/{token}',
    [UserAuthController::class, 'getPassword']
)->name('auth.resetPass');

Route::POST(
    '/auth/resetPass',
    [UserAuthController::class, 'postPassword']
)->name('auth.resetPass');
// -----------------------------end of forget password ------------------------------

// -----------------------------valuation tools ------------------------------
Route::get(
    '/valToolPage/valTool',
    [ValuationToolController::class, 'valuationTool']
)->name('valToolPage.valTool');

Route::POST(
    '/valToolPage/valTool',
    [ValuationToolController::class, 'saveHeader_Valuation']
)->name('valToolPage.valTool');

Route::get(
    '/valToolPage/valToolDetail/{id}',
    [ValuationToolController::class, 'add_new']
)->name('valToolPage.valToolDetail');

Route::POST(
    '/valToolPage/valToolDetail',
    [ValuationToolController::class, 'addDetails_Valution']
)->name('valToolPage.valToolDetail');

// -----------------------------end of valuation tools ------------------------------


// Route::POST(
//     '/auth/checkforgotpass',
//     [UserAuthController::class, 'checkforgotpass']
// )->name('auth.checkforgotpass');

// Route::get(
//     '/auth/verify/{$token}',
//     [UserAuthController::class, 'verify']
// )->name('auth.verify');

// Route::POST(
//     '/auth/resetpass',
//     [UserAuthController::class, 'resetpass']
// )->name('auth.resetpass');



//apply auth check middleware -- biar pas mau masuk kemanapun diminta login dulu
Route::group(['middleware'=>['AuthCheck']], function(){
    Route::get(
        '/auth/login',
        [UserAuthController::class, 'login']
    )->name('auth.login');    
    
    Route::get(
            '/auth/register',
            [UserAuthController::class, 'register']
        )->name('auth.register');
    
    Route::get(
            '/layout/home',
            [UserAuthController::class, 'home']
        )->name('layout.home');
    });


















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
