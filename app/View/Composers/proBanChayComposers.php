<?php
 
namespace App\View\Composers;

use App\Models\ProductModel;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class proBanChayComposers
{
    
    public function __construct()
    {
       
    }
 
    const LIMIT = 16;
   
    public function compose(View $view)
    {
        $view->with('BanChayPro', ProductModel::select('id','name','image','price','price_sale','slug')->where('status',0)->orderByDesc('id')->limit(self::LIMIT)->get());
    }
}