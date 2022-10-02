<?php

use App\Http\Controllers\Admin\Logins\LoginAdminController;
use Illuminate\Support\Facades\Route;

//clients
use App\Http\Controllers\Clients\Pages\BlogController;
use App\Http\Controllers\Clients\Pages\HomeController;
use App\Http\Controllers\Clients\Pages\SpController;
use App\Http\Controllers\Clients\Pages\ContactClientController;

// admin
use App\Http\Controllers\Admin\Pages\ProdController;
use App\Http\Controllers\Admin\Pages\CategoryController;
use App\Http\Controllers\Admin\Pages\BlogAdminController;
use App\Http\Controllers\Admin\Pages\SliderAdminController;
use App\Http\Controllers\Admin\Pages\QLCartController;



// Route::get('reset', function (){
//     Artisan::call('route:clear');
//     Artisan::call('cache:clear');
//     Artisan::call('config:clear');
//     Artisan::call('config:cache');
// });
// Sau đó đi đến http://your-domain/resetđể thực hiện các lệnh.
//  ở đó sau khi bạn có thể truy cập trang web của mình như bình thường

// Route::get('/clear-cache-all', function() {
//     Artisan::call('cache:clear');
  
//     dd("Cache Clear All");
// });

// clients

Route::get('/',[HomeController::class,'index'] )->name('home.index');
Route::get('/home/search',[HomeController::class,'search'] )->name('home.search');

//lien he
Route::get('/lien-he',[ContactClientController::class,'index'] )->name('contactClient.index');


//show sản phẩm và cart
Route::get('/san-pham',[SpController::class,'index'] )->name('pro.index');
Route::get('/{id}',[SpController::class,'show'])->name('pro.show');
Route::post('/san-pham/gio-hang',[SpController::class,'productCard'] )->name('pro.card');
Route::get('/san-pham/hien-thi-gio-hang',[SpController::class,'showCard'] )->name('pro.showcard');
Route::post('/san-pham/updateCard',[SpController::class,'update'] )->name('pro.updatecard');
Route::get('/san-pham/deleteCard/{id}',[SpController::class,'destroy'] )->name('pro.deletecard');
Route::get('/san-pham/checkout',[SpController::class,'checkout'] )->name('pro.checkout');
Route::post('/san-pham/checkout/create',[SpController::class,'createCheckout'] )->name('pro.createCheckout');
Route::get('/san-pham/checkout/success',[SpController::class,'checkoutok'] )->name('pro.checkoutok');


//tim kiem san pham
Route::get('/san-pham/{id}',[SpController::class,'timsanphamtheodanhmuc'])->name('pro.timkiem');

//show blog
Route::get('/bai-viet/tin-tuc',[BlogController::class,'index'] )->name('blogclient.index');
Route::get('/bai-viet/{id}',[BlogController::class,'show'] )->name('blogclient.show');


//login
Route::get('v_admin/login', [LoginAdminController::class,'index'])->name('login');
Route::post('admin/login/store', [LoginAdminController::class,'store'])->name('login.store');

//admin
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/category',[CategoryController::class,'index'])->name('category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class,'edit'])->name('category.edit');
    Route::put('/category/update/{id}', [CategoryController::class,'update'])->name('category.update');
    Route::delete('/category/destroy/{id}', [CategoryController::class,'destroy'])->name('category.destroy');

    Route::get('/product',[ProdController::class,'index'])->name('product.index');
    Route::get('/product/create',[ProdController::class,'create'])->name('product.create');
    Route::post('/product/store',[ProdController::class,'store'])->name('product.store');
    Route::get('/product/edit/{id}', [ProdController::class,'edit'])->name('product.edit');
    Route::put('/product/update/{id}', [ProdController::class,'update'])->name('product.update');
    Route::delete('/product/destroy/{id}', [ProdController::class,'destroy'])->name('product.destroy');
    Route::get('/product/searchPro', [ProdController::class,'searchPro'])->name('product.searchPro');

    Route::get('/blog',[BlogAdminController::class,'index'])->name('blog.index');
    Route::get('/blog/create',[BlogAdminController::class,'create'])->name('blog.create');
    Route::post('/blog/store',[BlogAdminController::class,'store'])->name('blog.store');
    Route::get('/blog/edit/{id}', [BlogAdminController::class,'edit'])->name('blog.edit');
    Route::put('/blog/update/{id}', [BlogAdminController::class,'update'])->name('blog.update');
    Route::delete('/blog/destroy/{id}', [BlogAdminController::class,'destroy'])->name('blog.destroy');

    Route::get('/slider',[SliderAdminController::class,'index'])->name('slider.index');
    Route::get('/slider/create',[SliderAdminController::class,'create'])->name('slider.create');
    Route::post('/slider/store',[SliderAdminController::class,'store'])->name('slider.store');
    Route::get('/slider/edit/{id}', [SliderAdminController::class,'edit'])->name('slider.edit');
    Route::put('/slider/update/{id}', [SliderAdminController::class,'update'])->name('slider.update');
    Route::delete('/slider/destroy/{id}', [SliderAdminController::class,'destroy'])->name('slider.destroy');

    Route::get('/carts',[QLCartController::class,'index'])->name('carts.index');
    Route::get('/carts/edit/{id}', [QLCartController::class,'edit'])->name('carts.edit');
    Route::delete('/carts/destroy/{id}', [QLCartController::class,'destroy'])->name('carts.destroy');
});