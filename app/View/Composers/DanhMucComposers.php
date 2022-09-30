<?php
 
namespace App\View\Composers;

use App\Models\Categorymodel;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class DanhMucComposers
{
    
    public function __construct()
    {
        
    }
 
   
    public function compose(View $view)
    {
        
        $view->with('danhmuc', Categorymodel::all());
    }
}