<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;



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
    //     return view('welcome');
    // });
// Route::get('/', [LoginController::class, 'getLogin']);
Route::group(['namespace' => 'Admin'], function(){
    Route::group(['prefix'=> 'login', 'middleware'=>'CheckLogedIn'], function(){
        Route::get('/', [LoginController::class, 'getLogin']);
        Route::post('/', [LoginController::class, 'postLogin']);
    });
    Route::get('logout', [HomeController::class, 'getLogout']);
    Route::group(['prefix'=> 'admin', 'middleware'=>'CheckLogedOut'], function(){
        Route::get('home', [HomeController::class, 'getHome']);
    });
});

