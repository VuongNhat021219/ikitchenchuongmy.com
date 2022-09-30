<?php
 
namespace App\View\Composers;

use App\Models\ProductModel;
use Illuminate\View\View;
 
class SpBanCoTheThichComposers
{
    
    public function __construct()
    {
        
    }
 
   
    public function compose(View $view)
    {
        $view->with('spbancothethich', ProductModel::where('status',2)->orderByDesc('id')->cursorPaginate(6));
    }
}