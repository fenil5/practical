<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Illuminate\Support\Facades\Session;

class UsersdataImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        $find_product=User::where('id',$row[1])->first();
        
        if($find_product){
           $product_id= $find_product->id;
           
        
           
            $ProviderChatRequest= User::where('id',$row[1])->update([
                'company_name'=>$row[0]]);
                Session::flash('message', 'User company name update successfully.');
            }
           else{ 
            
           }
        
       
    }
}
