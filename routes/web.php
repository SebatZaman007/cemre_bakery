<?php

use Illuminate\Support\Facades\Route;

//Mainfor backend
Route::get('/login',[App\Http\Controllers\Admin\MainController::class,'mainLogin'])->name('main.login');

//front

Route::get('/',[App\Http\Controllers\Frontend\MainController::class,'mainIndex'])->name('main.index');


//
//backend


//for-home
Route::get('/home-index',[App\Http\Controllers\Admin\HomeController::class,'homeIndex'])->name('home.index');
Route::get('/home-create',[App\Http\Controllers\Admin\HomeController::class,'homeCreate'])->name('home.create');
Route::post('/home-store',[App\Http\Controllers\Admin\HomeController::class,'homeStore'])->name('home.store');
Route::get('/home-edit/{id}',[App\Http\Controllers\Admin\HomeController::class,'homeEdit'])->name('home.edit');
Route::post('/home-update',[App\Http\Controllers\Admin\HomeController::class,'homeUpdate'])->name('home.update');
Route::get('/home-delete/{id}',[App\Http\Controllers\Admin\HomeController::class,'homeDelete'])->name('home.delete');


//for-offer

Route::get('/offer-index',[App\http\Controllers\Admin\OfferController::class,'offerIndex'])->name('offer.index');
Route::get('/offer-create',[App\http\Controllers\Admin\OfferController::class,'offercreate'])->name('offer.create');
Route::post('/offer-store',[App\http\Controllers\Admin\OfferController::class,'offerStore'])->name('offer.store');
Route::get('/offer-edit/{id}',[App\http\Controllers\Admin\OfferController::class,'offerEdit'])->name('offer.edit');
Route::post('/offer-update',[App\http\Controllers\Admin\OfferController::class,'offerUpdate'])->name('offer.update');
Route::get('/offer-delete/{id}',[App\http\Controllers\Admin\OfferController::class,'offerDelete'])->name('offer.delete');

//forabout

Route::get('/about-index',[App\http\Controllers\Admin\AboutController::class,'aboutIndex'])->name('about.index');
Route::get('/about-create',[App\http\Controllers\Admin\AboutController::class,'aboutCreate'])->name('about.create');
Route::post('/about-store',[App\http\Controllers\Admin\AboutController::class,'aboutStore'])->name('about.store');
Route::get('/about-edit/{id}',[App\http\Controllers\Admin\AboutController::class,'aboutEdit'])->name('about.edit');
Route::post('/about-update',[App\http\Controllers\Admin\AboutController::class,'aboutUpdate'])->name('about.update');
Route::get('/about-delete/{id}',[App\http\Controllers\Admin\AboutController::class,'aboutDelete'])->name('about.delete');


//for-portfolio

Route::get('/portfolio-index',[App\Http\Controllers\Admin\PortfolioController::class,'portfolioIndex'])->name('portfolio.index');
Route::get('/portfolio-create',[App\Http\Controllers\Admin\PortfolioController::class,'portfolioCreate'])->name('portfolio.create');
Route::post('/portfolio-store',[App\Http\Controllers\Admin\PortfolioController::class,'portfolioStore'])->name('portfolio.store');
Route::get('/portfolio-edit/{id}',[App\Http\Controllers\Admin\PortfolioController::class,'portfolioEdit'])->name('portfolio.edit');
Route::post('/portfolio-update',[App\Http\Controllers\Admin\PortfolioController::class,'portfolioUpdate'])->name('portfolio.update');
Route::get('/portfolio-delete/{id}',[App\Http\Controllers\Admin\PortfolioController::class,'portfolioDelete'])->name('portfolio.delete');
