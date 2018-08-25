<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\taixe;

class TaixeController extends Controller
{
    public function getDanhsach()
    {
    	$taixe = taixe::all();
    	return view('admin.taixe.danhsach',['taixe'=> $taixe]);
    }

    public function getThem()
    {
    	$taixe = taixe::all();
    	return view('admin.taixe.them', ['taixe'=>$taixe]);
    }
    public function postThem(Request $request)
    {
    	$this->validate($request, 
    		[
    			'txtTen'=>'required:taixe,ten',
    			'txtngaysinh'=>'required:taixe,ngaysinh',
    			'txtsdt'=>'required:taixe,sdt',
    			'txtdc'=>'required:taixe,diachi'
    		],
    		[
    			'txtTen.required'=>'Nhập tên tài xế!',
    			'txtngaysinh.required'=>'Nhập ngày sinh!',
    			'txtsdt.required'=>'Nhập số điện thoại!',
    			'txtsdt.unique'=> 'Số điện thoại đã tồn tại!',
    			'txtdc.required'=> 'Nhập địa chỉ!'
    		]);
    	$taixe = new taixe;
    	
    	$taixe->ten 		= 	$request->txtTen;
    	$taixe->ngaysinh 	= 	$request->txtngaysinh;
    	$taixe->sdt 		=	$request->txtsdt;
    	$taixe->diachi 		=	$request->txtdc;
        
    	if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/taixe/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $taixe->anh = "/upload/taixe/" . $name;
         }
        
        $taixe->save();
        
    	return 	redirect()
    			->route('admin.taixe.danhsach')
    			->with('thongbao','Thêm thành công');
    }

    public function getSua($id_tx)
    {
    	$taixe = taixe::find($id_tx);
    	return view('admin.taixe.sua',['taixe'=>$taixe]);
    }
    public function postSua(Request $request, $id_tx)
    {
    	$this->validate($request, 
    		[
    			'txtTen'=>'required:taixe,ten',
    			'txtngaysinh'=>'required:taixe,ngaysinh',
    			'txtsdt'=>'required:taixe,sdt',
    			'txtdc'=>'required:taixe,diachi'
    		],
    		[
    			'txtTen.required'=>'Nhập tên tài xế!',
    			'txtngaysinh.required'=>'Nhập ngày sinh!',
    			'txtsdt.required'=>'Nhập số điện thoại!',
    			'txtsdt.unique'=> 'Số điện thoại đã tồn tại!',
    			'txtdc.required'=> 'Nhập địa chỉ!'
    		]);
    	$taixe = taixe::find($id_tx);
    	
    	$taixe->ten 		= 	$request->txtTen;
    	$taixe->ngaysinh 	= 	$request->txtngaysinh;
    	$taixe->sdt 		=	$request->txtsdt;
    	$taixe->diachi 		=	$request->txtdc;
        
    	if($request->hasFile('chonanh')){
        // gan file up len vao 1 bien
                    $file = $request->file('chonanh');   
                    // dat lai ten file
                    $name = time().'_'.$file->getClientOriginalName();
                    // di chuyen anh vo public/upload/tintuc/
                    // m co the di chuyen vo cho khac
                    $filePath = "upload/taixe/"; // thay doi cai ni
                    $file->move($filePath, $name);
                    // gan cai ten file vo data ma m lưu db
                    $taixe->anh = "/upload/taixe/" . $name;
         }
        
        $taixe->save();
        
    	return 	redirect()
    			->route('admin.taixe.danhsach', $taixe->id_tx)
    			->with('thongbao','Sửa thành công');
    }

    public function getXoa($id_tx)
    {
    	$taixe = taixe::find($id_tx);
        $taixe->delete($id_tx);
        return  redirect()->route('admin.taixe.danhsach')
        		->with(['thongbao_level'=>'success','thongbao'=>'Xóa thành công!']);
    }
}
