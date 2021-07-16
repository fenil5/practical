<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Exports\UsersExport;
use App\Imports\UsersImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class ProductController extends Controller
{
    //
    public function add_product(){
        return view('/Admin/add_product');
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    
    public function importdata(Request $Request) 
    {
        // echo "sfdsf";die;
        Excel::import(new UsersImport,request()->file('file'));
        return back();
    }

}
