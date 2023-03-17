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
Route::get('/fuelStation',[FuelStationController::class,'index']);
Route::get('/maritimePole',[MaritimePoleController::class,'index']);
Route::get('/mapa', function () {
       return view('map');
     });


Route::get('/edit/{id}',[FuelStationController::class,'edit']);
Route::get('/update/{id}',[FuelStationController::class,'update']);
Route::get('/destroy/{id}',[FuelStationController::class,'destroy']);
Route::get('/create',[FuelStationController::class,'create']);
Route::get('/store',[FuelStationController::class,'store']);
Route::get('/editPole/{id}',[MaritimePoleController::class,'edit']);
Route::get('/updatePole/{id}',[MaritimePoleController::class,'update']);
Route::get('/destroyPole/{id}',[MaritimePoleController::class,'destroy']);
Route::get('/createPole',[MaritimePoleController::class,'create']);
Route::get('/storePole',[MaritimePoleController::class,'store']);
// Route::get('/',[ProvinceController::class,'index']);
// Route::get('/',[MunicipalityController::class,'index']);
// Route::get('/',[ProductController::class,'index']);
//Route::get('/upInfoDB',[FuelStationController::class,'upInfoDB']);
//Route::get('/upInfoDB',[MaritimePoleController::class,'upInfoDB']);

