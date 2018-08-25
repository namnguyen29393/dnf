@extends('now.cuahang.master') 
@section('content')
<div class="col-md-9">
    <div class="profile-content">

        <script>
            $('.nav li.active').removeClass('active');
            $('#proChangePass').addClass('active');
        </script>

        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <h3 style="text-align:center">Đổi mật khẩu</h3>

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
                
                <form action="{{ route('thongtinsanpham.doimatkhau') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
                
                    <fieldset style="padding: 15px;">
                        <div class="form-group has-feedback">
                            <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            <input class="form-control" data-val="true" data-val-length="Mật khẩu dài ít nhất 4 ký tự" data-val-length-max="255" data-val-length-min="4" data-val-required="Nhập mật khẩu mới" id="NewPassword" name="txtmk" placeholder="Mật khẩu mới" type="password">
                            <span class="field-validation-valid" data-valmsg-for="NewPassword" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group has-feedback">
                            <i class="glyphicon glyphicon-lock form-control-feedback"></i>
                            <input class="form-control" data-val="true" data-val-equalto="Xác nhận mật khẩu không đúng" data-val-equalto-other="*.NewPassword" data-val-required="Xác nhận mật khẩu mới" id="ConfirmNewPassword" name="txtmkxn" placeholder="Xác nhận mật khẩu mới" type="password">
                            <span class="field-validation-valid" data-valmsg-for="ConfirmNewPassword" data-valmsg-replace="true"></span>
                        </div>
                        <div class="form-group">
                            <div class="col-md-3">
                            </div>
                            <div class="col-md-6">
                                <div>
                                    <input type="submit" value="Đổi mật khẩu" id="bt_submit" class="btn btn-primary" style="width:100%">
                                </div>
                            </div>
                            <div class="col-md-3">
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div class="col-md-2"></div>
        </div>
        <script type="text/javascript">
            $(function() {

                $('#signupform').submit(function(event) {
                    var value = "";
                    var valueFormat = "";

                    value = $("#OldPassword").val();
                    valueFormat = CommonHelper.NoScriptTag(value.trim());
                    if (value.length != valueFormat.length) {
                        alert(ErrorText.Mem_Err10);
                        event.preventDefault();
                        return false;
                    }

                    value = $("#NewPassword").val();
                    valueFormat = CommonHelper.NoScriptTag(value.trim());
                    if (value.length != valueFormat.length) {
                        alert(ErrorText.Mem_Err11);
                        event.preventDefault();
                        return false;
                    }

                    value = $("#ConfirmNewPassword").val();
                    valueFormat = CommonHelper.NoScriptTag(value.trim());
                    if (value.length != valueFormat.length) {
                        alert(ErrorText.Mem_Err12);
                        event.preventDefault();
                        return false;
                    }

                });
            });
        </script>

    </div>
</div>
@endsection()