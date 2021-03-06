@extends('now.cuahang.master')
@section('content')
<div class="profile-content">

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <form action="{{ route('thongtinsanpham.themloaisanpham') }}" class="form-horizontal" method="POST" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
                <div class="form-group">
                    <label class="control-label col-md-4"></label>
                    <div class="col-md-8">
                        <h3 style="margin:0">Thêm loại sản phẩm</h3>
                    </div>
                </div>
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
                <div class="form-group">
                    <label class="control-label col-md-4">Tên loại sản phẩm</label>
                    <div class="col-md-8">
                        <input class="form-control" id="FirstName" name="txtTenloaisp" placeholder="Nhập tên loại sản phẩm" type="text" >
                        <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                    </div>
                </div> 
            <button type="submit" class="btn btn-default" id="submit">Thêm sản phẩm</button>
            <button type="reset" class="btn btn-default">Làm lại</button>  
            </form>
        </div>
        <div class="col-md-2"></div>
    </div>

    <script type="text/javascript">
        // $('#submit').click(function(e) {
        //     e.preventDefault();
        //     console.log(document.getElementById('formCreate'))
        //         console.log(12)
        //         document.getElementById('formCreate').submit();
        //     // $('#formCreate').submit((function(event) {
        //     //     console.log(11)
        //     //     event.preventDefault();
        //     // }));
        // })
        // $(function() {
        //     var errorItem = 0;
        //     switch (errorItem) {
        //         case 1:
        //             $("#FirstName").focus();
        //             break;
        //         case 2:
        //             $("#LastName").focus();
        //             break;
        //         case 3:
        //             $("#Email").focus();
        //             break;
        //         case 4:
        //             $("#Description").focus();
        //             break;
        //         default:
        //             break;
        //     }
        //     $('#signupform').submit(function() {
        //         var value = "";
        //         var valueFormat = "";

        //         value = $("#FirstName").val();
        //         valueFormat = CommonHelper.NoTag(value);
        //         $("#FirstName").val(valueFormat);

        //         value = $("#LastName").val();
        //         valueFormat = CommonHelper.NoTag(value);
        //         $("#LastName").val(valueFormat);

        //         value = $("#Description").val();
        //         valueFormat = CommonHelper.NoTag(value);
        //         $("#Description").val(valueFormat);

        //         value = $("#Email").val();
        //         valueFormat = CommonHelper.NoScriptTag(value);
        //         $("#Email").val(valueFormat);

        //     });
        // });
    </script>

</div>
@endsection