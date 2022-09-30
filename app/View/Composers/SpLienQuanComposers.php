<?php
 
namespace App\View\Composers;

use App\Models\ProductModel;
use Illuminate\View\View;
 
class SpLienQuanComposers
{
    
    public function __construct()
    {
        
    }
 
   
    public function compose(View $view)
    {
        $view->with('splienquan', ProductModel::where('status',1)->orderByDesc('id')->cursorPaginate(8));
    }
}