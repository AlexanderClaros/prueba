<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\AutonomousCommunityController;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\MunicipalityController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\FuelStationController;
use App\Http\Controllers\MaritimePoleController;

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
Route::get('/',[MaritimePoleController::class,'index']);
// Route::get('/',[ProvinceController::class,'index']);
// Route::get('/',[MunicipalityController::class,'index']);
// Route::get('/',[ProductController::class,'index']);
// Route::get('/',[FuelStationController::class,'index']);
// Route::get('/',[MaritimePoleController::class,'index']);

