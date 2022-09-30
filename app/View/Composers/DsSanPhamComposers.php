<?php
 
namespace App\View\Composers;

use App\Models\Categorymodel;
use App\Models\ProductModel;
use Illuminate\View\View;
 
class DsSanPhamComposers
{
    
    public function __construct()
    {
        
    }
 
    const LIMIT = 6;
    public function compose(View $view)
    {
        $view->with('danhmuc', Categorymodel::select('id','name')->orderByDesc('id')->limit(self::LIMIT)->get());
        $view->with('dssanpham', ProductModel::select('id','name','image','price','price_sale','slug')->where('status','!=','4')->orderByDesc('id')->cursorPaginate(12));
        $view->with('dsspleft', ProductModel::select('id','name','image','price','price_sale','slug')->where('status','!=','4')->orderByDesc('name')->limit(self::LIMIT)->get());
    }
}