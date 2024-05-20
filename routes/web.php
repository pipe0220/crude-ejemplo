<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CamioneroController;

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

Route::resource('camioneros', CamioneroController::class);
Route::get('camionero',[CamioneroController::class,'create']);
Route::post('camionero/store', [CamioneroController::class,'store'])->name('create.store');
