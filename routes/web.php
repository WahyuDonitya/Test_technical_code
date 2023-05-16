<?php

use App\Http\Controllers\SiteController;
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


Route::get('/home', [SiteController::class, 'home']);
Route::post('/triangle', [SiteController::class, 'triangle'])->name('segitiga');
Route::post('/ganjil', [SiteController::class, 'ganjil'])->name('ganjil');

