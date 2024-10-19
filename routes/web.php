<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('frontend.page.home');
})->name('home');

//______ Contact _____//
Route::resource('/contacts', ContactController::class)->names('contact');

Route::get('/cc', function () {
   
    Artisan::call('optimize:clear');
    return 'clear';
});

require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
