<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\loaisanpham;

class LoaisanphamController extends Controller
{
    public function getThem()
    {
    	
    	return view('admin.loaisanpham.them');
    }
    public function postThem(Request $request)
    {
    	$this->validate($request,
    		[
    			'txtTenloaisanpham'=>'required|unique:loaisanphams,tenloaisp'
    		],
    		[
    			'txtTenloaisanpham.required'=>'Nhập tên sản phẩm',
    			'txtTenloaisanpham.unique'=>'Tên sản phẩm đã tồn tại'
    		]);

    	$loaisanpham = new loaisanpham;

    	$loaisanpham->tenloaisp = $request->txtTenloaisanpham;
    	$loaisanpham->save();
    	return redirect()->route('admin.loaisanpham.them')->with('thongbao','Thêm thành công');

    }

    public function getDanhsach()
    {
    	$loaisanpham = loaisanpham::select('id_loaisp', 'tenloaisp')->orderBy('id_loaisp','DESC')->get();
    	return view('admin.loaisanpham.danhsach',['loaisanpham'=>$loaisanpham]);
    }

    public function getSua($id_loaisp)
    {
    	$loaisanpham = loaisanpham::find($id_loaisp);
    	return view('admin.loaisanpham.sua',['loaisanpham'=>$loaisanpham]);
    }

    public function postSua(Request $request, $id_loaisp)
    {
    	$loaisanpham = loaisanpham::find($id_loaisp);
    	$this->validate($request,
    		[
    			'txtTenloaisanpham'=>'required|unique:loaisanphams,tenloaisp'
    		],
    		[
    			'txtTenloaisanpham.required'=>'Nhập tên loại sản phẩm',
    			'txtTenloaisanpham.unique'=>'Tên sản phẩm đã tồn tại.'
    		]);
    	$loaisanpham->tenloaisp = $request->txtTenloaisanpham;
    	$loaisanpham->save();
    	return redirect()->route('admin.loaisanpham.danhsach')->with(['thongbao_level'=>'success', 'thongbao'=>'Sửa thành công']);
    }

    public function getXoa($id_loaisp){
    	$loaisanpham = loaisanpham::find($id_loaisp);
    	$loaisanpham->delete();
    	return redirect()->route('admin.loaisanpham.danhsach')->with(['thongbao_level'=>'success', 'thongbao'=>'Xóa thành công']);
    }
}
