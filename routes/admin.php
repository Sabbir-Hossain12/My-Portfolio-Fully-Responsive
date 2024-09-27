<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Backend\DashboardController;

use App\Http\Controllers\BannerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TechnologyController;
use Illuminate\Support\Facades\Route;


//______ Admin Panel Starts _____//

Route::name('admin.')->middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    //______ Dashboard _____//
    Route::resource('/dashboards', DashboardController::class)->names('dashboard');
    //______ Banner _____//
    Route::resource('/banners', BannerController::class)->names('banner');
    //______ About _____//
    Route::resource('/abouts', AboutController::class)->names('about');
    //______ Skill _____//
    Route::resource('/skills', SkillController::class)->names('skill');
    //______ Service _____//
    Route::resource('/services', ServiceController::class)->names('service');
    //______ Technology _____//
    Route::resource('/technologies', TechnologyController::class)->names('technology');
    //______ Portfolio _____//
    Route::resource('/portfolios', PortfolioController::class)->names('portfolio');
    //______ Contact _____//
    Route::resource('/contacts', ContactController::class)->names('contact');
});
