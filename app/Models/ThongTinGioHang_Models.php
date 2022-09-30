<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinGioHang_Models extends Model
{
    use HasFactory;
    protected $fillable = [
        'ttkh_id',
        'product_id',
        'qty',
        'price'
    ];

    public function product()
    {
        return $this->hasOne(ProductModel::class,'id','product_id');
    }
}
