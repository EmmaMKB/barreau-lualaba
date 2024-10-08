<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/gallery-photos', [HomeController::class, 'gallery'])->name('photo-gallery');
Route::get('/mot-du-batonnier', [HomeController::class, 'batonnier'])->name('batonnier-mot');

