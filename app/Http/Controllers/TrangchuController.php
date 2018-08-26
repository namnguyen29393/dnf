<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TestRequest;
use App\thongtincuahang;
use App\User;
use App\loaicuahang;
use App\sanpham;
class TrangchuController extends Controller
{
	// deo comment code dc ?
	public function indexsss()
	{
		$thongtincuahang = thongtincuahang::all();
		$loaicuahang = loaicuahang::all();
		return view('now.trangchu', [
			'loaicuahang' => $loaicuahang,
			'thongtincuahang' => $thongtincuahang,
		]);

	}

	public function index($type = null)
	{
		$stores = thongtincuahang::whereHas('loaicuahang', function ($query) use ($type) {
			$query->when($type, function($q, $type) {
				$q->where('tenkhongdau', '=', $type);
			});
		})->paginate(12);
		$loaicuahang = loaicuahang::all();
		return view('now.trangchu', [
			'loaicuahang' => $loaicuahang,
			'stores' => $stores,
		]);
	}

	public static function getSanpham()
	{
		$sanpham = sanpham::all();
		return $sanpham;
	}
	public function getCuahang($tencuahang)
	{
		// dd($tencuahang);
		// dd($request->all());
		$cuahang = thongtincuahang::where('tenkhongdau','=',$tencuahang)->select('tencuahang')->first();
		return view('now.chitiet');
	}

}
