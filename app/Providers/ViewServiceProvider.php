<?php
 
namespace App\Providers;

use App\View\Composers\CartClientComposers;
use App\View\Composers\SliderClientComposers;
use App\View\Composers\proBanChayComposers;
use App\View\Composers\DanhMucComposers;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use App\View\Composers\SpBanCoTheThichComposers;
use App\View\Composers\SpLienQuanComposers;
use App\View\Composers\DsSanPhamComposers;
use App\View\Composers\TinTucComposers;
use App\View\Composers\TimKiemProductComposers;
 
class ViewServiceProvider extends ServiceProvider
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
        View::composer('client.includes.headerDesktop',DanhMucComposers::class);
        View::composer('client.includes.headerMobile',DanhMucComposers::class);
        View::composer('client.layouts.slider',SliderClientComposers::class);
        View::composer('client.layouts.spnoibat',proBanChayComposers::class);
        View::composer('client.layouts.spbancothethich',SpBanCoTheThichComposers::class);
        View::composer('client.layouts.productNew',SpLienQuanComposers::class);
        View::composer('client.layouts.dssanpham',DsSanPhamComposers::class);
        View::composer('client.layouts.blog',TinTucComposers::class);
        View::composer('client.layouts.blog_detail',TinTucComposers::class);
        View::composer('client.layouts.baiviet',TinTucComposers::class);
        View::composer('client.layouts.blog_detail',DsSanPhamComposers::class);
        View::composer('client.layouts.blog',DsSanPhamComposers::class);
        View::composer('client.pages.timsanphamtheodanhmuc',TimKiemProductComposers::class);
        View::composer('client.pages.searchClient',TimKiemProductComposers::class);
        View::composer('client.includes.cart',CartClientComposers::class);
        View::composer('client.pages.dangHangThanhCong',DsSanPhamComposers::class);



    }
}