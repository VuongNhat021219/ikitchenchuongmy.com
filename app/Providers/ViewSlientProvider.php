<?php
 
namespace App\Providers;

use App\View\Composers\SliderComposers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
 
class ViewSlientProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
 
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
    }
}