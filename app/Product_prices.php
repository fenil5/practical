<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product_prices extends Model
{
    //
    protected $fillable = ['product_id','user_id','product_price'];
}
