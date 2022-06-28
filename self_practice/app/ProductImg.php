<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductImg extends Model
{
    protected $table = 'product_img';
    protected $fillable = ['productDetail_id','productDetail_img','sort'];

    // public function productDetail()
    // {
    //     return $this->belongsTo('App\Product','productDetail_id');
    // }
}
