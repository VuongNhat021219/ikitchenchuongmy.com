<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Models\ThongTinKhachHang_Models;
use Illuminate\Http\Request;

class QLCartController extends Controller
{
    protected $thongtinkhachhang;

    public function __construct()
    {
        $this->thongtinkhachhang = new ThongTinKhachHang_Models();
    }

    public function index(){
        $ttkh = $this->thongtinkhachhang->orderByDesc('id')->cursorPaginate(8);
        return view('admin.pages.carts',compact('ttkh'));
    }

    

   

   
    
    public function edit($id)
    {
        $ttkh = $this->thongtinkhachhang->find($id);
        $ttgh = $ttkh->thongTinGioHang_Models()->with('product')->get();
       
       return view('admin.layouts.carts.thongtinhoadonKH',compact('ttgh','ttkh')); 
    }

   
    

  
    public function destroy($id)
    {
        $deleteCart = $this->thongtinkhachhang->find($id);
        $deleteCart->delete();
        return redirect()->back();
    }
}
