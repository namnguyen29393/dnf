@extends('admin.master')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin tài khoản
                <small>{{$user->name}}</small>
            </h1>
        </div>
        <!-- /.col-lg-12 -->
        <div class="col-lg-7" style="padding-bottom:120px">
            @if (count($errors)>0)
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{!!$error!!}</li>
                    @endforeach
                </div>
            @endif
            @if (session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
            <form action="{{ route('admin.user.sua',$user->id_user) }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                <div class="form-group">
                    <label>Tên người dùng</label>
                    <input class="form-control" name="txtTen" placeholder="Nhập tên người dùng" value="{{$user->name}}" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="txtemail" placeholder="Nhập Email" value="{{$user->email}}" readonly="" />
                </div>
                <div class="form-group">
                    <input type="checkbox" id="changepassword" name="changepass"> 
                    <label>Đổi Password</label>
                    <input type="password" class="form-control password" name="txtmk" placeholder="Nhập mật khẩu"  disabled="" />
                </div>
                <div class="form-group">
                    <label>Nhập lại Password</label>
                    <input type="password" class="form-control password" name="txtmkxn" placeholder="Nhập lại mật khẩu" disabled="" />
                </div>
                <div class="form-group">
                    <label >Phân quyền</label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="level" 
                            @if ($user->level==1)
                                {{"checked"}}
                            @endif
                        >Admin
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="0" name="level" 
                                @if ($user->level==0)
                                {{"checked"}}
                            @endif
                        >Người dùng
                    </label>
                    
                        
                    
                        
                </div>
                
                <button type="submit" class="btn btn-default">Sửa</button>
                <button type="reset" class="btn btn-default">Làm lại</button>
            <form>
        </div>
    </div>
    <!-- /.row -->
</div>
<!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->
@endsection()

@section('script')
    <script >
        $(document).ready(function(){
            $("#changepassword").change(function(){
                if ($(this).is(":checked"))
                    {
                        $(".password").removeAttr('disabled');
                    }else{
                        $(".password").attr('disabled','');
                    }
                
            });
        });
    </script>
@endsection