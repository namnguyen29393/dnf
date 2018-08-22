@extends('admin.master')
@section('content')


<!-- Page Content -->
<div id="page-wrapper">
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Thông tin tài khoản
                <small>Thêm</small>
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
            <form action="{{ route('admin.user.them') }}" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}">
                <div class="form-group">
                    <label>Tên người dùng</label>
                    <input class="form-control" name="txtTen" placeholder="Nhập tên người dùng" />
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input class="form-control" name="txtemail" placeholder="Nhập Email" />
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="txtmk" placeholder="Nhập mật khẩu" />
                </div>
                <div class="form-group">
                    <label>Nhập lại Password</label>
                    <input type="password" class="form-control" name="txtmkxn" placeholder="Nhập lại mật khẩu" />
                </div>
                <div class="form-group">
                    <label >Phân quyền</label>
                    <label class="radio-inline">
                        <input type="radio" value="1" name="level" checked="">Admin
                    </label>
                    <label class="radio-inline">
                        <input type="radio" value="0" name="level" checked="">Người dùng
                    </label>
                    
                        
                    
                        
                </div>
                
                <button type="submit" class="btn btn-default">Thêm</button>
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

