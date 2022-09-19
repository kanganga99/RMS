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

Route::get('tenants/create', [TenantController::class, 'create']);
Route::post('tenants/store', [TenantController::class, 'store']);

Route::get('tenants/show/{tenant_id}', [TenantController::class, 'show']);

Route::get('tenants/edit/{tenant_id}', [TenantController::class, 'edit']);
Route::post('tenants/update/{tenant_id}', [TenantController::class, 'update']);

Route::post('tenants/{tenant_id}', [TenantController::class, 'destroy']);



Route::get('vacantrooms/', [VacantRoomController::class, 'index']);

Route::get('vacantrooms/create', [VacantRoomController::class, 'create']);
Route::post('vacantrooms/store', [VacantRoomController::class, 'store']);

Route::get('vacantrooms/edit/{vacantroom_id}', [VacantRoomController::class, 'edit']);
Route::post('vacantrooms/update/{vacantroom_id}', [VacantRoomController::class, 'update']);

Route::post('vacantrooms/{vacantroom_id}', [VacantRoomController::class, 'destroy']);

Route::get('damagedrooms/', [DamagedRoomController::class, 'index']);

Route::get('damagedrooms/create', [DamagedRoomController::class, 'create']);
Route::post('damagedrooms/store', [DamagedRoomController::class, 'store']);

Route::get('damagedrooms/edit/{damagedroom_id}', [DamagedRoomController::class, 'edit']);
Route::post('damagedrooms/update/{damagedroom_id}', [DamagedRoomController::class, 'update']);

Route::post('damagedrooms/{damagedroom_id}', [DamagedRoomController::class, 'destroy']);

