<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\ContactController;

Route::get('/contact',[ContactController::class,'index'])->name('contact.index');
    
Route::post('/contact/confirm',[ContactController::class,'confirm'])->name('contact.confirm');

Route::get('/contact/send',[ContactController::class,'send'])->name('contact.send');

