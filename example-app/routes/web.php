<?php

use App\Http\Controllers\DemoController;
use App\Http\Controllers\PersonController;
use App\Http\Controllers\VIDEOController;
use App\Http\Middleware\DemoMiddleware;
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
Route::get('/Demo9', [DemoController::class, "Demo9"]);
Route::get('/Demo10', [DemoController::class, "Demo10"]);


Route::get('/SessionPut/{email}', [DemoController::class, 'SessionPut']);

Route::get('/SessionPull', [DemoController::class, 'SessionPull']);

Route::get('/essionForget', [DemoController::class, 'essionForget']);

Route::get('/SessionFlash', [DemoController::class, 'SessionFlash']);

Route::get('/SessionGet', [DemoController::class, 'SessionGet']);



Route::get('/hell/{key}', [DemoController::class, 'DemoAction'])->middleware([DemoMiddleware::class]);


Route::get('/hell', [DemoController::class, 'DemoAction2']);


// Route::middleware(['demo'])->group(function ()
// {

// });


    Route::get('/hello1/{key}', [DemoController::class, 'DemoAction1'])->middleware(middleware:'throttle:4,1');
    Route::get('/hello2/{key}', [DemoController::class, 'DemoAction2']);
    Route::get('/hello3/{key}', [DemoController::class, 'DemoAction3']);
    Route::get('/hello4/{key}', [DemoController::class, 'DemoAction4']);




    Route::resource('users', VIDEOController::class);
