<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\sanpham;
use App\loaisanpham;


class SanphamController extends Controller
{
    public function getThem()
    {

    	$loaisanpham = loaisanpham::all();
    	return view('admin.sanpham.them',['loaisanpham'=>$loaisanpham]);
    }
    public function postThem(Request $request)
    {
		$rules = [
		        'txtTensp'=>'required|unique:sanphams,tensp',
    			'txtGia' =>'numeric:sanphams,giasp'
    		];
    	$messages=[
    			'txtTensp.required'=>'Nhập tên sản phẩm!',
    			'txtTensp.unique'=> 'Tên sản phẩm bị trùng!',
    			
    			'txtGia.numeric' => 'Giá sản phẩm là số!'
		        ];
		    	$validator = \Validator::make($request->all(), $rules, $messages);

		        if ($validator->fails()) {
		        	// dd($validator->messages());
		            return redirect()->back()
		                        ->withErrors($validator)
		                        ->withInput();
		        }


    	
    	$sanpham = new sanpham;
    	//$loaisp = loaisanpham::select('id_loaisp')->get();

    	
    	$sanpham->tensp = $request->txtTensp;
    	$sanpham->giasp = $request->txtGia;
    	$sanpham->loaisp_id =$request->loai;
        
    	if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/sanpham/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $sanpham->hinhanh = "/upload/sanpham/" . $name;
         }
        
        //
        //$sanpham->loaisanpham()->associate($request->loai);
        $sanpham->save();
        
    	return redirect()->route('admin.sanpham.danhsach')->with('thongbao','Thêm thành công');
    }

    public function getDanhsach()
    {
    	$sanpham = sanpham::with('loaisanpham')->get();
    	return view('admin.sanpham.danhsach',['sanpham'=>$sanpham]);
    }

    public function getSua($id_sp)
    {
    	$sanpham = sanpham::all()->find($id_sp);
    	$loaisanpham = loaisanpham::select('id_loaisp','tenloaisp')->get();
    	return view('admin.sanpham.sua',['loaisanpham'=>$loaisanpham],['sanpham'=>$sanpham]);
    }
    public function postSua(Request $request, $id_sp)
    {
    	$this->validate($request,
    		[
    			'txtTensp'=>'required|unique:sanphams,tensp',
    			'txtGia' =>'numeric:sanphams,giasp'
    		],
    		[
    			'txtTensp.required'=>'Nhập tên sản phẩm!',
    			'txtTensp.unique'=> 'Tên sản phẩm bị trùng!',
    			
    			'txtGia.numeric' => 'Giá sản phẩm là số!'
    		]);
    	$sanpham = sanpham::find($id_sp);

    	$sanpham->tensp = $request->txtTensp;
    	$sanpham->giasp = $request->txtGia;
    	$sanpham->loaisp_id =$request->loai;
    	if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/sanpham/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $sanpham->hinhanh = "/upload/sanpham/" . $name;
         }
    	$sanpham->save();
        
    	return redirect()->route('admin.sanpham.danhsach',$sanpham->id_sp)->with(['thongbao_level'=>'success', 'thongbao'=>'Sửa thành công!!!!']);
    }

    public function getXoa($id_sp)
    {
        $sanpham = sanpham::find($id_sp);
        $sanpham->delete($id_sp);
        return redirect()->route('admin.sanpham.danhsach')->with(['thongbao_level'=>'success','thongbao'=>'Xóa thành công!']);
    }

}
