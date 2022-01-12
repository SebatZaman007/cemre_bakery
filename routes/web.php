<?php

use Illuminate\Support\Facades\Route;

//Main
Route::get('/login',[App\Http\Controllers\Admin\MainController::class,'mainLogin'])->name('main.login');

//front

Route::get('/',[App\Http\Controllers\Frontend\MainController::class,'mainIndex'])->name('main.index');


//
//backend
//forhome
Route::get('/home-index',[App\Http\Controllers\Admin\HomeController::class,'homeIndex'])->name('home.index');
Route::get('/home-create',[App\Http\Controllers\Admin\HomeController::class,'homeCreate'])->name('home.create');
Route::post('/home-store',[App\Http\Controllers\Admin\HomeController::class,'homeStore'])->name('home.store');
Route::get('/home-edit/{id}',[App\Http\Controllers\Admin\HomeController::class,'homeEdit'])->name('home.edit');
Route::post('/home-update',[App\Http\Controllers\Admin\HomeController::class,'homeUpdate'])->name('home.update');
Route::get('/home-delete/{id}',[App\Http\Controllers\Admin\HomeController::class,'homeDelete'])->name('home.delete');


//foroffer

Route::get('/offer-index',[App\http\Controllers\Admin\OfferController::class,'offerIndex'])->name('offer.index');
Route::get('/offer-create',[App\http\Controllers\Admin\OfferController::class,'offercreate'])->name('offer.create');
Route::post('/offer-store',[App\http\Controllers\Admin\OfferController::class,'offerStore'])->name('offer.store');
Route::get('/offer-edit/{id}',[App\http\Controllers\Admin\OfferController::class,'offerEdit'])->name('offer.edit');
Route::post('/offer-update',[App\http\Controllers\Admin\OfferController::class,'offerUpdate'])->name('offer.update');
Route::get('/offer-delete/{id}',[App\http\Controllers\Admin\OfferController::class,'offerDelete'])->name('offer.delete');

