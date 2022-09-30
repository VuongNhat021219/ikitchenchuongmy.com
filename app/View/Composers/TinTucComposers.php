<?php
 
namespace App\View\Composers;

use Illuminate\View\View;
use App\Models\blog_models;


class TinTucComposers
{
    
    public function __construct()
    {
        
    }
 
    const LIMIT = 4;
    public function compose(View $view)
    {
        $view->with('tintuc', blog_models::select('id','title','title_sub','image','danhmucbaiviet','content','slug','created_at')->where('danhmucbaiviet','!=',0)->orderByDesc('id')->limit(self::LIMIT)->get());
        $view->with('showbaiviet', blog_models::select('id','title','title_sub','danhmucbaiviet','image','content','slug','created_at')->where('danhmucbaiviet','!=',0)->orderByDesc('id')->cursorPaginate(8));
    }
}