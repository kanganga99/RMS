<?php

// use App\Http\Controllers\Controller;
// use App\Http\Controllers\HomeController;

use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\DamagedRoomController;
use App\Http\Controllers\TenantController;
use App\Http\Controllers\VacantRoomController;
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
Route::get('/','App\Http\Controllers\User\HomeController@index');

Route::get('post/{post}','App\Http\Controllers\PropertyController@post')->name('post');
Route::get('post/category/{category}','App\Http\Controllers\user\HomeController@category')->name('category');

// Route::prefix('App\Http\Controllers\Admin')->group( function (){
Route::prefix('admin')->namespace('App\Http\Controllers\Admin')->group( function (){
    Route::get('/dashboard','AdminController@Dashboard')->name('admin.dashboard')->middleware('admin');

    Route::get('/login','Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('/login','Auth\LoginController@login');



    // Route::get('/login','AdminController@Index')->name('login-form');
    // Route::post('/login/owner','AdminController@Login')->name('admin.login');
    // Route::get('/dashboard','AdminController@Dashboard')->name('admin.dashboard')->middleware('admin');
    Route::get('/logout','AdminController@AdminLogout')->name('admin.logout');
    Route::get('/register','AdminController@AdminRegister')->name('admin.register');
    Route::post('/register/create','AdminController@AdminRegisterCreate')->name('admin.register.create');

    Route::resource('/user','UserController');
    Route::resource('/agent','AgentController');
    Route::resource('/post','PropertyController');
    Route::resource('/category','LocationController');



});

Route::prefix('agent')->namespace('App\Http\Controllers\Agent')->group( function (){


    // Route::get('/login','AgentController@Index')->name('agent_login-form');
    // Route::get('/dashboard/users','AgentController@AgentDashboard')->name('agent.dashboard');
    // Route::post('/login/owner','AgentController@AgentLogin')->name('agent.login');

    Route::get('/dashboard','AgentController@AgentDashboard')->name('agent.dashboard')->middleware('agent');
    Route::get('/login','Auth\LoginController@showLoginForm')->name('agent.login');
    Route::post('/login','Auth\LoginController@login'); 
    
    Route::get('/logout','AgentController@AgentLogout')->name('agent.logout')->middleware('agent');
    Route::get('/register','AgentController@AgentRegister')->name('agent.register');
    Route::post('/register/create','AgentController@AgentRegisterCreate')->name('agent.register.create');

});

Auth::routes();


// ==================================user auth routes==================
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('user/category/{category}','App\Http\Controllers\HomeController@category')->name('cat');

// Route::get('post/category/{category}','App\Http\Controllers\HomeController@category')->name('category');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin/home');

Route::resource('tenants/', TenantController::class);
// Route::resource('tenants/', 'TenantController@index');

// Route::get('/register','AgentController@AgentRegister')->name('agent.register');

Route::get('tenants/create', [TenantController::class, 'create']);
Route::post('tenants/store', [TenantController::class, 'store']);

Route::get('tenants/show/{tenant_id}', [TenantController::class, 'show']);

Route::get('tenants/edit/{tenant_id}', [TenantController::class, 'edit']);
Route::post('tenants/{tenant_id}', [TenantController::class, 'update']);

Route::post('tenants/{tenant_id}', [TenantController::class, 'destroy']);



Route::get('vacantrooms/', [VacantRoomController::class, 'index']);

Route::get('vacantrooms/create', [VacantRoomController::class, 'create']);
Route::post('vacantrooms/store', [VacantRoomController::class, 'store']);

Route::get('vacantrooms/edit/{vacantroom_id}', [VacantRoomController::class, 'edit']);
Route::post('vacantrooms/{vacantroom_id}', [VacantRoomController::class, 'update']);

Route::post('vacantrooms/{vacantroom_id}', [VacantRoomController::class, 'destroy']);


Route::post('vacantrooms/{vacantroom_id}', [Admin\UserController::class, 'index']);


// Route::get('admin/user/show', 'App\Http\Controllers\Admin\UserController@index');

    
// Route::get('admin/user/edit/{user_id}', 'App\Http\Controllers\Admin\UserController@edit');
// Route::post('admin/user/update/{user_id}', 'App\Http\Controllers\Admin\UserController@update');

// Route::get('admin/user/create', 'App\Http\Controllers\Admin\UserController@create');
// Route::post('admin/user/store', 'App\Http\Controllers\Admin\UserController@store');

// Route::post('admin/user/{user_id}', 'App\Http\Controllers\Admin\UserController@destroy');







