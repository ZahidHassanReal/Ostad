<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PersonController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("person/{name?}", [PersonController::class,"getPerson"]);

Route::get('/Demo1', [DemoController::class, "Demo1"]);
Route::get('/Demo2', [DemoController::class, "Demo2"]);
Route::get('/Demo4', [DemoController::class, "Demo4"]);
Route::get('/Demo5', [DemoController::class, "Demo5"]);
Route::get('/Demo6', [DemoController::class, "Demo6"]);
Route::get('/Demo7', [DemoController::class, "Demo7"]);
Route::get('/Demo8', [DemoController::class, "Demo8"]);