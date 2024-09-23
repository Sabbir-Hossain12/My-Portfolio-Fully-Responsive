<?php

namespace App\Providers;

use App\Models\Portfolio;
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
        view()->composer('frontend.include.portfolio', function ($view) {
           
            $portfolios= Portfolio::where('status', 1)
                ->select('portfolio_title', 'portfolio_image','portfolio_link','portfolio_btn_text')
                ->orderBy('portfolio_sequence', 'asc')
                ->get();
            $view->with('portfolios', $portfolios);
        });
    }
}
