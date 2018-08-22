<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function validateLogin(Data $data)
    {
        // code validate o day
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
    }

    public function login (Request $request)
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
        // code owr ddaay
        // bưng cái code login bên kia dán vô đây
        if (auth::attempt(['email'=>$request->email, 'password'=>$request->password])) {
            return redirect()->route('admin.user.danhsach');
        }else
        {
            return redirect()->route('login')->with(['thongbao_level'=>'danger', 'thongbao'=>'Đăng nhập không thành công']);
        }
    }
}
