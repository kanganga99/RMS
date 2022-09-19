<?php

// use App\Http\Controllers\Controller;
// use App\Http\Controllers\HomeController;

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


    Route::get('/login','AdminController@Index')->name('login-form');
    Route::post('/login/owner','AdminController@Login')->name('admin.login');
    Route::get('/dashboard','AdminController@Dashboard')->name('admin.dashboard')->middleware('admin');
    Route::get('/logout','AdminController@AdminLogout')->name('admin.logout')->middleware('admin');
    Route::get('/register','AdminController@AdminRegister')->name('admin.register');
    Route::post('/register/create','AdminController@AdminRegisterCreate')->name('admin.register.create');

    Route::resource('/user','UserController');
    Route::resource('/post','PropertyController');
    Route::resource('/category','LocationController');


});

Route::prefix('agent')->namespace('App\Http\Controllers\Agent')->group( function (){


    Route::get('/login','AgentController@Index')->name('agent_login-form');
    Route::get('/dashboard','AgentController@AgentDashboard')->name('agent.dashboard')->middleware('agent'); 
    Route::post('/login/owner','AgentController@AgentLogin')->name('agent.login');
    Route::get('/logout','AgentController@AgentLogout')->name('agent.logout')->middleware('agent');
    Route::get('/register','AgentController@AgentRegister')->name('agent.register');
    Route::post('/register/create','AgentController@AgentRegisterCreate')->name('agent.register.create');

});


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('user/home','App\Http\Controllers\user\HomeController@index');

// Route::group(['namespace'=> 'App\Http\Controllers\admin'],function(){
//     Route::get('admin/home','HomeController@index')->name('admin/home');
//     Route::get('admin/dashboard','AdminController@Dashboard')->name('admin/dashboard');

// //     Route::get('/login','AdminController@index')->name('login-form');

// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('web');
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin/home');

Route::resource('tenants/', TenantController::class);

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
Route::patch('vacantrooms/{vacantroom_id}', [VacantRoomController::class, 'update']);

Route::post('vacantrooms/{vacantroom_id}', [VacantRoomController::class, 'destroy']);


// Route::get('damagedrooms', DamagedRoomController::class, 'index');