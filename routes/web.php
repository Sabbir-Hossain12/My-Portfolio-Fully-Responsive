<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('frontend.page.home');
});



require __DIR__.'/auth.php';
require __DIR__.'/admin.php';
