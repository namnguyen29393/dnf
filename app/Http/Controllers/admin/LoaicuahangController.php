<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\loaicuahang;

class LoaicuahangController extends Controller
{
	public function getDanhsach()
    {
    	$loaicuahang = loaicuahang::select('id_loaicuahang','tenloaicuahang')->orderBy('id_loaicuahang','DESC')->get();
    	return view('admin.loaicuahang.danhsach', ['loaicuahang'=>$loaicuahang]);
    }

    public function getThem()
    {
    	return view('admin.loaicuahang.them');
    }

    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'txtTenloaicuahang'=>'required|unique:loaicuahangs,tenloaicuahang'
    		],
    		[
    			'txtTenloaicuahang.required'=>'Nhập tên loại cửa hàng',
    			'txtTenloaicuahang.unique' => 'Tên loại cửa hàng bị trùng',
    		]);
    	
    	$loaicuahang = new loaicuahang;
    	$loaicuahang->tenloaicuahang = $request->txtTenloaicuahang;
        
    	$loaicuahang->save();
    	return redirect()->route('admin.loaicuahang.them')->with('thongbao','Thêm thành công');
    }


        public function getSua($id_loaicuahang)
    {
    	$loaicuahang = loaicuahang::find($id_loaicuahang);
    	return view('admin.loaicuahang.sua',['loaicuahang'=>$loaicuahang]);
    }


    	public function postSua(Request $request, $id_loaicuahang)
    {
    	$loaicuahang = loaicuahang::find($id_loaicuahang);
    	$this->validate($request,
    		[
    			'txtTenloaicuahang'=>'required|unique:loaicuahangs,tenloaicuahang'
    		],
    		[
    			'txtTenloaicuahang.required'=>'Nhập tên loại cửa hàng',
    			'txtTenloaicuahang.unique' => 'Tên loại cửa hàng bị trùng',
    		]);
    	

    	$loaicuahang->tenloaicuahang = $request->txtTenloaicuahang;
    	$loaicuahang->save();
    	return redirect()->route('admin.loaicuahang.sua', $loaicuahang->id_loaicuahang)->with(['thongbao_level'=>'success', 'thongbao'=>'Sửa thành công!!!!']);
    }


    	public function getXoa($id_loaicuahang)
    {
    	$loaicuahang = loaicuahang::find($id_loaicuahang);
    	$loaicuahang->delete($id_loaicuahang);
    	return redirect()->route('admin.loaicuahang.danhsach')->with(['thongbao_level'=>'success', 'thongbao'=>'Xóa thành công']);
    }

}
