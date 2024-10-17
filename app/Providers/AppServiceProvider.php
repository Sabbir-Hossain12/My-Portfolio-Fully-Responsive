<?php

namespace App\Providers;

use App\Models\About;
use App\Models\Banner;
use App\Models\BasicInfo;
use App\Models\Portfolio;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Technology;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        
        $basicInfo= BasicInfo::first();
        view()->share('basicInfo', $basicInfo);
        
        view()->composer('frontend.include.banner', function ($view) {

            $banner= Banner::select('background_img','profile_img','name','designation','short_desc')->first();

            $view->with('banner', $banner);
        });

        view()->composer('frontend.include.about', function ($view) {

            $about= About::select('cover_img','title','designation','short_desc')->first();

            $view->with('about', $about);
        });

        view()->composer('frontend.include.skills', function ($view) {

            $skills= Skill::select('skill_title','skill_desc')->first();

            $view->with('skills', $skills);
        });


        view()->composer('frontend.include.technology', function ($view) {

            $technologies= Technology::select('technology_title','technology_icon')->first();

            $view->with('technologies', $technologies);
        });

        view()->composer('backend.pages.portfolio.service', function ($view) {

            $services= Service::where('status', 1)->select('service_icon','title','desc')->first();

            $view->with('services', $services);
        });
        
        
        view()->composer('frontend.include.portfolio', function ($view) {
           
            $portfolios= Portfolio::where('status', 1)
                ->select('portfolio_title', 'portfolio_image','portfolio_link','portfolio_btn_text','portfolio_short_desc')
                ->orderBy('portfolio_sequence', 'asc')
                ->get();
            $view->with('portfolios', $portfolios);
        });

       
        
       
      
    }
}
