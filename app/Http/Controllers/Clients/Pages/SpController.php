<?php

namespace App\Http\Controllers\Clients\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutDatHangRequest;
use App\Jobs\sendEmail;
use App\Models\ProductModel;
use Illuminate\Http\Request;
use App\Models\Categorymodel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Session;
use App\Models\ThongTinKhachHang_Models;
use App\Models\ThongTinGioHang_Models;
use Illuminate\Support\Facades\DB;

class SpController extends Controller
{
    protected $product;
    protected $ttkhachhang;
    public function __construct()
    {
        $this->product = new ProductModel();
        $this->ttkhachhang = new ThongTinKhachHang_Models();
    }

    public function index()
    {
        return view('client.pages.products');
    }

    public function timsanphamtheodanhmuc($id)
    {

        $product = $this->product->select('id', 'name', 'image', 'price', 'cate_id', 'price_sale', 'slug')->where('cate_id', '=', $id)->orderByDesc('id')->get();

        return view('client.pages.timsanphamtheodanhmuc', compact('product'));
    }

    public function show(Request $request, $id)
    {

        $product = $this->product->find($id);
        $cate = $product->categorymodel->name;
        return view('client.pages.chitietPro', compact('product', 'cate'));
    }

    // cart-----------------------
    public function productCard(Request $request)
    {
        $qty = (int)$request->input('num_product');
        $product_id = (int)$request->input('product_id');

        if ($qty <= 0 || $product_id <= 0) {
            Session::flash('error', 'Số Lượng Hoặc Sản Phẩm Không Chính Xác');
        }

        //lấy ra kiểm tra xem có sản phẩm trong giỏ hàng chưa
        $carts = Session::get('carts');
        // dd($carts);

        //nếu chưa có sẽ tạo mới carts đó
        if (is_null($carts)) {
            Session::put('carts',[
                $product_id =>$qty
            ]);
        }else{
            //dùng arr để lấy ra product_id của biến cart(id sản phẩm trong giỏ hàng)
            $exits = Arr::exists($carts,$product_id);
            //nếu lấy thành công sẽ + với số lượng mới và update mới
            if($exits==true){
               $carts[$product_id] = $carts[$product_id] + $qty;
                
               Session::put('carts',$carts);
    
            }
            $carts[$product_id] = $qty;
            Session::put('carts',$carts);
        }


        
        return redirect()->route('pro.showcard');
    }

    public function showCard(){

        $carts = Session::get('carts');

        if (is_null($carts)) {
            
            $carts = [];
        }

        $productId = array_keys($carts);

        $pro = $this->product->select('id','name','price','price_sale','image')->whereIn('id',$productId)->get();

        return view('client.pages.shopping_cart',[
            'product' => $pro,
            'carts' => Session::get('carts')
        ]);
    }


   
    //cart

    public function update(Request $request)
    {

        Session::put('carts',$request->num_product);
        return redirect()->route('pro.showcard');
        
    }

    //cart
    public function destroy($id)
    {
        $carts = Session::get('carts');
        unset($carts[$id]);
        Session::put('carts',$carts);
        return redirect()->back();

    }

    //cart checkout
    public function checkout(){
        return view('client.pages.checkoutClient');
    }


    //suly checkout
    public function createCheckout(CheckoutDatHangRequest $request){
        
        DB::beginTransaction();
        $carts = Session::get('carts');

        if (is_null($carts)) {
            
            $carts = [];
        }
        $thongtinkhachang = ThongTinKhachHang_Models::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'address' => $request->address,
            'content' => $request->content
        ]);

        DB::commit();
        Session::flash('success','Đặt Hàng Thành Công');

        #queue
        // sendEmail::dispatch($request->email)->delay(now()->addSeconds(5));

        Session::forget('carts');
        $productId = array_keys($carts);

        $products = $this->product->select('id','name','price','price_sale','image')->whereIn('id',$productId)->get();

        $data = [];
        foreach($products as $pro){
            $data[] = [
                'ttkh_id' => $thongtinkhachang->id,
                'product_id' => $pro->id,
                'qty' => $carts[$pro->id],
                'price' => $pro->price_sale
            ];
        }
        ThongTinGioHang_Models::insert($data);
        return redirect()->route('pro.checkoutok');
    }
   public function checkoutok(){
    return view('client.pages.dangHangThanhCong');
   }
}
