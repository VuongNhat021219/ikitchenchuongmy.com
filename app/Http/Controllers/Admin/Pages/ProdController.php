<?php

namespace App\Http\Controllers\Admin\Pages;

use App\Http\Controllers\Controller;
use App\Http\Requests\EditProductRequest;
use Illuminate\Http\Request;
use App\Models\ProductModel;
use App\Http\Requests\StoreProductRequest;
use Illuminate\Support\Str;
use App\Models\Categorymodel;
use Illuminate\Support\Facades\DB;

class ProdController extends Controller
{
    protected $product;
    protected $category;
    public function __construct()
    {
        $this->product = new ProductModel(); 
        $this->category = new Categorymodel();
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        
        $product = $this->product->orderByDesc('id')->cursorPaginate(5);
                
        return view('admin.pages.product',compact('product'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $cate = $this->category->all();
        return view('admin.layouts.products.addProduct',compact('cate'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
        // $request->validate();

        //upload 1 ảnh
        if($request->hasfile('image'))
        {
            $nameImage=$request->file('image')->getClientOriginalName();
            $request->file('image')->move(public_path().'/uploads/images/', $nameImage); 
        }

        if($request->hasfile('images1'))
        {
            $nameImages1=$request->file('images1')->getClientOriginalName();
            $request->file('images1')->move(public_path().'/uploads/images/', $nameImages1); 
        }
        if($request->hasfile('images2'))
        {
            $nameImages2=$request->file('images2')->getClientOriginalName();
            $request->file('images2')->move(public_path().'/uploads/images/', $nameImages2); 
        }
        if($request->hasfile('images3'))
        {
            $nameImages3=$request->file('images3')->getClientOriginalName();
            $request->file('images3')->move(public_path().'/uploads/images/', $nameImages3); 
        }

        //upload nhiều ảnh
        // if($request->hasfile('images'))
        // {
        //    foreach($request->file('images') as $images)
        //    {
        //        $names= $images->getClientOriginalName();
        //        $images->move(public_path().'/uploads/images/', $names); 
        //        $data[] = $names;  
        //    }
        //    //chuyển sang dữ liệu json -> lấy ra thì dùng json_decode
        //    $namejson = json_encode($data);
        // }
       
        //lưu vào database
       $this->product->name = $request->name;
       $this->product->content = $request->content;
       $this->product->price = $request->price;
       $this->product->price_sale = $request->price_sale;
       $this->product->cate_id = $request->cate_id;
       $this->product->image = $nameImage;
       $this->product->images1 = $nameImages1;
       $this->product->images2 = $nameImages2;
       $this->product->images3 = $nameImages3;
       $this->product->description = $request->description;
       $this->product->slug = Str::of($request->name.'-'.mt_rand())->slug('-');
       $this->product->status = $request->radio;
        
       $this->product->save();

       return redirect()->route('product.index');
   

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = $this->product->find($id);
        $cateName = $product->categorymodel->name;
        $cateAll = $this->category->all();

        return view('admin.layouts.products.editProduct',compact('product','cateName','cateAll'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EditProductRequest $request, $id)
    {
        $product = $this->product->find($id);

         //upload 1 ảnh
         if($request->hasfile('image'))
         {
             $nameImage=$request->file('image')->getClientOriginalName();
             $request->file('image')->move(public_path().'/uploads/images/', $nameImage); 
         }else{
            $nameImage= $product->image;
         }
 
         if($request->hasfile('images1'))
         {
             $nameImages1=$request->file('images1')->getClientOriginalName();
             $request->file('images1')->move(public_path().'/uploads/images/', $nameImages1); 
         }else{
            $nameImages1= $product->images1;
         }

         if($request->hasfile('images2'))
         {
             $nameImages2=$request->file('images2')->getClientOriginalName();
             $request->file('images2')->move(public_path().'/uploads/images/', $nameImages2); 
         }
         else{
            $nameImages2= $product->images2;
         }

         if($request->hasfile('images3'))
         {
             $nameImages3 = $request->file('images3')->getClientOriginalName();
             $request->file('images3')->move(public_path().'/uploads/images/', $nameImages3); 
         }else{
            $nameImages3 = $product->images3;
         }
       //lưu vào database
       $product->name = $request->name;
       $product->content = $request->content;
       $product->price = $request->price;
       $product->price_sale = $request->price_sale;
       $product->cate_id = $request->cate_id;
       $product->image = $nameImage;
       $product->images1 = $nameImages1;
       $product->images2 = $nameImages2;
       $product->images3 = $nameImages3;
       $product->description = $request->description;
       $product->slug = Str::of($request->name.'-'.mt_rand())->slug('-');
       $product->status = $request->radio;
        $product->save();
       return redirect()->route('product.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = $this->product->find($id);
        $product->delete();
        return redirect()->back();
        
    }

    //tim kiem
    public function searchPro(Request $request){
        $keywords = $_GET['search'];
       $pro = $this->product->where('name','LIKE','%'.$keywords.'%')->where('name','LIKE','%'.$keywords.'%')->get();

       return view('admin.layouts.search.searchPro',compact('pro'));
    }
}
