<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Web\pages\BlogController;
use App\Http\Livewire\Web\pages\HomeController;
use App\Http\Livewire\Web\pages\AboutController;
use App\Http\Livewire\Web\Pages\ContactController;
use App\Http\Livewire\Web\pages\ServiceController;
use App\Http\Livewire\Web\Pages\PortfolioController;
use App\Http\Livewire\Web\pages\BlogSingleController;
use App\Http\Livewire\Web\Pages\ServiceSingleController;
use App\Http\Livewire\Web\Pages\PortfolioSingleController;



Route::get('/', HomeController::class)->name('home');
Route::get('/about', AboutController::class)->name('about');
Route::get('/contact', ContactController::class)->name('contact');

Route::prefix('service')->as('service')->group(function(){
    Route::get('/', ServiceController::class)->name('index'); //route('api:v1:category:index');
    Route::get('{service:slug}', ServiceSingleController::class)->name('show'); //route('api:v1:category:store');
});

Route::prefix('post')->as('post')->group(function(){
    Route::get('/', BlogController::class)->name('index'); 
    Route::get('{post:slug}', BlogSingleController::class)->name('show');
});

Route::prefix('portfolio')->as('portfolio')->group(function(){
    Route::get('/', PortfolioController::class)->name('index'); 
    Route::get('{portfolio:slug}', PortfolioSingleController::class)->name('show');
});