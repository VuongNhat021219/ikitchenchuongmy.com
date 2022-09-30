<?php
 
namespace App\View\Composers;

use App\Models\SliderModels;
use App\Repositories\UserRepository;
use Illuminate\View\View;
 
class SliderClientComposers
{
    
    public function __construct()
    {
        
    }
 
   
    public function compose(View $view)
    {
        $view->with('slider', SliderModels::where('active',1)->orderByDesc('sort_by')->get());
    }
}