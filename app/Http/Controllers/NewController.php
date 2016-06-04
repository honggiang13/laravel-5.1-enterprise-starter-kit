<?php

namespace App\Http\Controllers;
use DB;
use App\User;
use App\Http\Controllers\Controller;

class NewController extends Controller
{
    public function getAlbum(){
        $quoctich = DB::table('quoctich')->select('IDQuocTich','TenQuocTich')->get();
        $theloai = DB::table('theloai')->select('IDTheLoai','TheLoai')->get();
        $album_lever1_3 = DB::table('album')-> select('IDAlbum','HinhAlbum','TenAlbum')->paginate(9);
        return view('user.subpage.cate-album', compact('quoctich','theloai','album_lever1_3'));
    }
    public function getNhac()
    {
        $baihat = DB::table('baihat')-> select('IDBaiHat','TenBaiHat','TrinhBay','FileNhac')
                     ->paginate(25);
        $quoctich = DB::table('quoctich')->select('IDQuocTich','TenQuocTich')->get();
        $theloai = DB::table('theloai')->select('IDTheLoai','TheLoai')->get();
        return view('user.subpage.nhac',compact('baihat','quoctich','theloai'));
    }

}