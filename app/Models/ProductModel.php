<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductModel extends Model
{
    use HasFactory;
    public function categorymodel(){
        return $this->belongsTo(Categorymodel::class,'cate_id','id');
    }
}
