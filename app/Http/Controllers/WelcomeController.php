<?php namespace App\Http\Controllers; 
use DB;
class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$theloai = DB::table('theloai')->select('IDTheLoai','TheLoai')->get();
		$quoctich = DB::table('quoctich')->select('IDQuocTich','TenQuocTich')->get();
		$topmusic=DB::table('baihat')->select('IDBaiHat','TenBaiHat','TrinhBay')->skip(0)->take(10)->get();
		$album_lever1_1 = DB::table('album')-> select('IDAlbum','HinhAlbum','TenAlbum')-> skip(1)-> take(6) ->get();
		$baihat = DB::table('baihat')-> select('IDBaiHat','TenBaiHat','TrinhBay','FileNhac')-> skip(0)-> take(15) ->get();
		$getsub = DB::table('theloai')->select('IDTheLoai','TheLoai')->get();
		return view('user.pages.home',compact('theloai','quoctich','topmusic','album_lever1_1','baihat','getsub'));
	}
	

}
