<?php

namespace App\Imports;

use App\Product_prices;
use App\Product;
use App\user;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Concerns\ToModel;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $find_product=Product::where('part_number',$row[0])->first();
        
        if($find_product){
           $product_id= $find_product->id;
           $find_sub=Product_prices::select('products.*','product_prices.*')
           ->leftJoin('products', 'products.id', '=', 'product_prices.product_id')
           ->where('products.id',$product_id)->first();
           ;
        
           if(!empty($find_sub)){ 
            $ProviderChatRequest= Product_prices::where('product_id',$product_id)->where('user_id',$row[2])->update([
                'product_price'=>$row[1]]);
                Session::flash('message', 'Product price data updated successfully.');
           }
           else{ 
            return new Product_prices([
                'product_id' => $product_id,
                'user_id'=>$row[2],
                'product_price'=>$row[1],
            ]);
            Session::flash('message', 'Product price data added successfully.');
           }
        }
        else{
            echo "no";die;
        }
        
    }
}
