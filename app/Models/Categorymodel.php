<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Categorymodel extends Model
{
    use HasFactory;
    public function productmodel(){
        return $this->hasMany(ProductModel::class,'cate_id','id');
    }
}
