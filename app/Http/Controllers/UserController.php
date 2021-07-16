<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use App\Exports\UsersExport;
use App\Imports\UsersdataImport;
use Maatwebsite\Excel\Facades\Excel;
use Illuminate\Http\Request;
use DB;

class UserController extends Controller
{
    //
    public function add_user(){
        return view('/Admin/add_user');
    }
    public function export() 
    {
        return Excel::download(new UsersExport, 'users.xlsx');
    }
   
    
    public function importuser(Request $Request) 
    {
        // echo "sfdsf";die;
        Excel::import(new UsersdataImport,request()->file('file'));
        return back();
    }

}
