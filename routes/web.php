<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Web\pages\HomeController;
use App\Http\Livewire\Web\pages\AboutController;
use App\Http\Livewire\Web\pages\ServiceController;

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

/* Route::get('/', function () {
    return view('layouts.base');
}); */

Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/service', ServiceController::class)->name('service');