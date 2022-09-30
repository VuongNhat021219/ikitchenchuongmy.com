<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ThongTinKhachHang_Models extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'content'
       
    ];
    public function thongTinGioHang_Models(){
        return $this->hasMany(ThongTinGioHang_Models::class,'ttkh_id','id');
    }
}
