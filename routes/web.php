<?php

use App\Http\Livewire\Web\About\AboutController;
use App\Http\Livewire\Web\Home\HomeController;
use App\Http\Livewire\Web\Service\ServiceController;
use Illuminate\Support\Facades\Route;

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