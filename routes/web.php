<?php

use App\Http\Controllers\DamagedRoomController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin/home');

Route::resource('tenants/', TenantController::class);

Route::post('tenants/create', [TenantController::class, 'create']);

Route::get('tenants/show', [TenantController::class, 'show']);

Route::post('tenants/edit{tenant_id}', [TenantController::class, 'edit']);

Route::get('vacantrooms/', [VacantRoomController::class, 'index']);

Route::get('vacantrooms/create', [VacantRoomController::class, 'create']);

Route::get('vacantrooms/edit{vantroom_id}', [VacantRoomController::class, 'edit']);

// Route::get('damagedrooms', DamagedRoomController::class, 'index');
