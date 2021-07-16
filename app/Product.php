<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    
 protected $fillable = ['part_number','name','description','qty'];
}
