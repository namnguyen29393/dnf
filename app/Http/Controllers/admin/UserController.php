<?php

namespace App\Http\Controllers\admin;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
	public function getDanhsach()
	{
	$user = User::all();
    return view('admin.user.danhsach',['user'=>$user]);
	}

	public function getThem()
	{
		return view('admin.user.them');
	}
	public function postThem(Request $request)
	{
		$this->validate($request,
		[
			'txtTen'=>'required|min:3',
			'txtemail'=>'required|email|unique:users,email',
			'txtmk'=>'required|min:6|max:32',
			'txtmkxn'=>'required|same:txtmk'
		],
		[
			'txtTen.required'=>'Chưa nhập tên!',
			'txtTen.min'=>'Tên người dùng phải có 3 ký tự',
			'txtemail.required'=>'Nhập vào email',
			'txtemail.email'=>'Sai định dạng email!',
			'txtemail.unique'=>'Email đã tồn tại!',
			'txtmk.required'=>'Chưa nhập mật khẩu!',
			'txtmk.min'=>'Mật khẩu phải có ít nhất 3 ký tự!',
			'txtmk.max'=>'Mật khẩu phải có tối đa 32 ký tự!',
			'txtmkxn.required'=>'Mật vào nhập khẩu',
			'txtmkxn.same'=>'Mật khẩu không trùng khớp!'
		]);
		$user = new User;

		$user->name = $request->txtTen;
		$user->email = $request->txtemail;
		$user->password = bcrypt($request->txtmk);
		$user->level = $request->level;
		$user->save();

		return redirect()->route('admin.user.danhsach')->with('thongbao','Thêm thành công');
		
	}

	public function getSua($id_user)
	{
		$user = User::all()->find($id_user);
		return view('admin.user.sua',['user'=>$user]);
	}
	public function postSua(Request $request, $id_user)
	{
		$this->validate($request,
		[
			'txtTen'=>'required|min:3',
			
			'txtmk'=>'required|min:6|max:32',
			'txtmkxn'=>'required|same:txtmk'
		],
		[
			'txtTen.required'=>'Chưa nhập tên!',
			'txtTen.min'=>'Tên người dùng phải có 3 ký tự',
			
			'txtmk.required'=>'Chưa nhập mật khẩu!',
			'txtmk.min'=>'Mật khẩu phải có ít nhất 3 ký tự!',
			'txtmk.max'=>'Mật khẩu phải có tối đa 32 ký tự!',
			'txtmkxn.required'=>'Mật vào nhập khẩu',
			'txtmkxn.same'=>'Mật khẩu không trùng khớp!'
		]);
		$user = User::find($id_user);

		$user->name = $request->txtTen;
		
		$user->password = bcrypt($request->txtmk);
		$user->level = $request->level;
		$user->save();

		return redirect()->route('admin.user.danhsach',$user->id_user)->with('thongbao','Sửa thành công');
	}

	public function getXoa($id_user)
	{
		$user = User::find($id_user);
		$user->delete();

		return redirect()->route('admin.user.danhsach',$user->id_user)->with('thongbao','Xóa thành công');
	}


	public function getdangnhapAdmin()
	{
		return view('login');
	}
	public function postdangnhapAdmin(Request $request)
	{
		$this->validate($request,
			[
				'email'=>'required',
				'password'=> 'required|min:3|max:32'
			],
			[
				'email.required'=>'Chưa nhập vào Email',
				'password.required'=>'Chưa nhập mật khẩu',
				'password.min'=>'Mật khẩu có ít nhất 3 ký tự',
				'password.max'=>'Mật khẩu không quá 32 ký tự'
			]);
		if (auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
			return redirect()->route('admin.user.danhsach');
		}else
		{
			return redirect()->route('login')->with(['thongbao_level'=>'danger', 'thongbao'=>'Đăng nhập không thành công']);
		}


	}
	public function getdangxuatAdmin()
		{
			Auth::logout();
			return redirect()->route('login');
		}


	public function getDangnhap()
	{
		return view('login');
	}
	public function postDangnhap(Request $request)
	{
		$this->validate($request,
			[
				'email'=>'required',
				'password'=> 'required|min:3|max:32'
			],
			[
				'email.required'=>'Chưa nhập vào Email',
				'password.required'=>'Chưa nhập mật khẩu',
				'password.min'=>'Mật khẩu có ít nhất 3 ký tự',
				'password.max'=>'Mật khẩu không quá 32 ký tự'
			]);
		if (auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
			return redirect()->route('admin.user.danhsach');
		}else
		{
			return redirect()->route('login')->with(['thongbao_level'=>'danger', 'thongbao'=>'Đăng nhập không thành công']);
		}


	}
}
