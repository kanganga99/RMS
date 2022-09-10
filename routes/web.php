<?php

// use App\Http\Controllers\Controller;
// use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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

// Route::prefix('App\Http\Controllers\Admin')->group( function (){
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group( function (){


    Route::get('/login','AdminController@Index')->name('login-form');
    Route::post('/login/owner','AdminController@Login')->name('admin.login');
    Route::get('/dashboard','AdminController@Dashboard')->name('admin.dashboard')->middleware('admin');
    Route::get('/logout','AdminController@AdminLogout')->name('admin.logout')->middleware('admin');
    Route::get('/register','AdminController@AdminRegister')->name('admin.register');
    Route::post('/register/create','AdminController@AdminRegisterCreate')->name('admin.register.create');

});


Route::get('/', function () {
    return view('welcome');
});

Route::get('user/home','App\Http\Controllers\user\HomeController@index');

// Route::group(['namespace'=> 'App\Http\Controllers\admin'],function(){
//     Route::get('admin/home','HomeController@index')->name('admin/home');
//     Route::get('admin/dashboard','AdminController@Dashboard')->name('admin/dashboard');

// //     Route::get('/login','AdminController@index')->name('login-form');

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// Route::middleware(['auth','user-role:user'])->group(function()
// {
    // Route::get("/home",[HomeController::class, 'userHome'])->name('home');

// });
// Route::middleware(['auth','user-role:agent'])->group(function()
// {
//     Route::get("agent/home",[HomeController::class, 'agentHome'])->name('home.agent');

// });
// Route::middleware(['auth','user-role:admin'])->group(function()
// {
//     Route::get("admin/home",[HomeController::class, 'adminHome'])->name('home.admin');

// });