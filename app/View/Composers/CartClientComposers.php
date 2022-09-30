<?php
 
namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\ProductModel;
use Illuminate\Support\Facades\Session;

class CartClientComposers
{
    
    public function __construct()
    {
        
    }
 
    public function compose(View $view)
    {
        $carts = Session::get('carts');

        if (is_null($carts)) {
            
            $carts = [];
        }

        $productId = array_keys($carts);

        $pro = ProductModel::select('id','name','price','price_sale','image')->whereIn('id',$productId)->get();

        
        $view->with('sanpham',$pro);
        $view->with('carts',$carts);
    }
}