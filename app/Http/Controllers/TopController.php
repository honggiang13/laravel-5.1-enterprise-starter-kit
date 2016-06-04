<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Http\Controllers\Controller;

class TopController extends Controller
{
    public function topajax(){
         $baihat = DB::table('baihat')-> select('IDBaiHat','TenBaiHat','TrinhBay','IDTheLoai')->where('IDTheLoai',1)->paginate(10);
        return view('user.subpage.topajax',compact('baihat'));
		
    }
    public function topajax2()
    {   
        $baihatt = DB::table('baihat')-> select('IDBaiHat','TenBaiHat','TrinhBay','IDTheLoai')->where('IDTheLoai',4)->paginate(10);
        return view('user.subpage.show',compact('baihatt'));
    }

}