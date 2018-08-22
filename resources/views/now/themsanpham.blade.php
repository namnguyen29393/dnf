<html ng-app="SSOApp" class="ng-scope">

<head>
    <style type="text/css">
        @charset "UTF-8";
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        
        ng\:form {
            display: block;
        }
        
        .ng-animate-shim {
            visibility: hidden;
        }
        
        .ng-anchor {
            position: absolute;
        }
    </style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông tin cơ bản</title>
    <link rel="SHORTCUT ICON" href="/favicon.ico">

    <script src="https://sdk.accountkit.com/en_US/sdk.js?hash=bfd6314ad2aafaae0c4c38fc8c5a6ebb" async=""></script>
    <script src="/dangky/Scripts/jquery-1.9.1.min.js"></script>
    <script src="/dangky/Scripts/jquery.cookie.js"></script>
    <script src="/dangky/Scripts/social-login.js"></script>
    <script src="/dangky/Scripts/bootstrap.min.js"></script>
    <link href="/dangky/Content/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/dangky/Content/styles.css" rel="stylesheet" type="text/css">
    <link href="/dangky/Content/responsive.css" rel="stylesheet" type="text/css">
    <link href="/dangky/Content/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="/dangky/Scripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/dangky/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
    <script src="/dangky/Scripts/CommonHelper.js" type="text/javascript"></script>
    <script src="/dangky/Scripts/angular/angular.js" type="text/javascript"></script>
    <script src="/dangky/Scripts/angular/SSOApp.js" type="text/javascript"></script>
    <script src="/dangky/Scripts/angular/controller/NavCtrl.js" type="text/javascript"></script>
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>
    <script src="/dangky/Scripts/jquery.bpopup.min.js"></script>
    <script src="/dangky/Scripts/resources/resources.js" type="text/javascript"></script>
    <style type="text/css">
        [ng\:cloak],
        [ng-cloak],
        [data-ng-cloak],
        [x-ng-cloak],
        .ng-cloak,
        .x-ng-cloak,
        .ng-hide:not(.ng-hide-animate) {
            display: none !important;
        }
        
        ng\:form {
            display: block;
        }
        
        .ng-animate-shim {
            visibility: hidden;
        }
        
        .ng-anchor {
            position: absolute;
        }
    </style>

    <script type="text/javascript">
        SSOApp.controller('NavCtrl', NavCtrl);
    </script>
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        @if (count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{!!$error!!}</li>
            @endforeach
        </ul>
    </div>
    @endif

        <div class="header-line"></div>
        <div class="wrapper ng-scope" ng-controller="NavCtrl" ng-init="Init()">
            <div class="btn-mobile-menu">
                <i class="fa fa-bars" ng-click="ShowToolTip()"></i>
                <ul ng-show="IsShowToolTip" class="ng-hide">
                    <li class="active">
                        <a href="/tai-khoan">
                            <i class="fa fa-pencil-square-o "></i> Thông tin cơ bản
                        </a>
                    </li>
                    <li>
                        <a href="/tai-khoan/doi-mat-khau">
                            <i class="fa fa-user"></i> Đổi mật khẩu
                        </a>
                    </li>
                    <li>
                        <a href="/tai-khoan/doi-hinh-dai-dien">
                            <i class="fa fa-photo"></i> Cập nhật hình đại diện
                        </a>
                    </li>
                    <li class="manage-session">
                        <a href="/tai-khoan/quan-ly-phien-dang-nhap">
                            <i class="fa fa-cog"></i> Quản lý phiên hoạt động
                        </a>
                    </li>
                    <li>
                        <a href="/tai-khoan/quan-ly-dia-chi">
                            <i class="fa fa-cog"></i> Quản lý địa chỉ
                        </a>
                    </li>
                    <li>
                        <a href="/dang-xuat">
                            <i class="fa fa-sign-out"></i> Đăng xuất
                        </a>
                    </li>
                </ul>
            </div>
            <div class="nav-user-mobile nav-user">
                <div class="nav-avatar">
                    <img id="userAvatar" src="https://media.foody.vn/usr/g212/2113186/avt/c200x200/foody-avatar-535-636684084229067124.jpg">
                </div>
            </div>
        </div>
    </nav>
    <div class="container" style="margin-bottom: 150px;">

        <div class="container">
            <div class="row profile">
                <div class="col-md-3">
                    <div class="profile-sidebar">
                        <div class="profile-userpic">
                            <img id="imgLeftProfileMemberAvatar" src="https://media.foody.vn/usr/g212/2113186/avt/c200x200/foody-avatar-535-636684084229067124.jpg" class="img-responsive" alt="">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                Kiến Tiềm
                            </div>
                        </div>
                        <script src="/dangky/Scripts/angular/controller/AccountInfoCtrl.js?123" type="text/javascript"></script>
                        <script type="text/javascript">
                            SSOApp.controller('AccountInfoCtrl', AccountInfoCtrl);
                        </script>
                        <div ng-controller="AccountInfoCtrl" ng-init="Init()" class="ng-scope">
                            <div id="ppVerifyPassword" class="pp-verify fd-popup">
                                <div class="fd-popup-frame">
                                    <div class="va-content">
                                        Tài khoản của bạn chưa được cập nhật Mật Khẩu! Vui lòng cập nhật mật khẩu cho tài khoản của bạn.
                                    </div>
                                    <div class="va-btn-content">
                                        <a href="javascript:void(0)" class="va-btn" ng-click="SetPassword('/tai-khoan/doi-mat-khau')">Cập nhật ngay</a>
                                        <a href="javascript:void(0)" class="va-btn" ng-click="SetPassword()" style="border: none;">Cập nhật sau</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="profile-usermenu">
                            <ul class="nav">
                                <li class="active" id="proInfo">
                                    <a href="/tai-khoan">
                                        <i class="fa fa-pencil-square-o "></i> Thông tin cơ bản
                                    </a>
                                </li>
                                <li id="proChangePass">
                                    <a href="/tai-khoan/doi-mat-khau">
                                        <i class="fa fa-user"></i> Đổi mật khẩu
                                    </a>
                                </li>
                                <li id="proChangeAvatar">
                                    <a href="/tai-khoan/doi-hinh-dai-dien">
                                        <i class="fa fa-photo"></i> Cập nhật hình đại diện
                                    </a>
                                </li>

                                <li id="proManageAddress">
                                    <a href="/tai-khoan/quan-ly-dia-chi">
                                        <i class="fa fa-cog"></i> Quản lý địa chỉ
                                    </a>
                                </li>
                                <li>
                                    <a href="/dang-xuat">
                                        <i class="fa fa-sign-out"></i> Đăng xuất
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="profile-content">

                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">

                                <form id="formCreate" action="/dangkycuahang" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
                                    <input type="hidden" name="_token" value="{!! csrf_token()!!}" />
                                    <div class="form-group">
                                        <label class="control-label col-md-4"></label>
                                        <div class="col-md-8">
                                            <h3 style="margin:0">Thông tin tài khoản</h3>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Tên cửa hàng</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="FirstName" name="txtTencuahang" placeholder="Nhập tên cửa hàng" type="text" >
                                            <span class="field-validation-valid" data-valmsg-for="FirstName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Địa chỉ</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="LastName" name="txtDiachi" placeholder="Nhập địa chỉ" type="text" >
                                            <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Mã cửa hàng</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="MCH" name="txtMacuahang" placeholder="Nhập địa chỉ" type="text" >
                                            <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-4">Email</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="Email" name="txtemail" placeholder="Nhập địa chỉ" type="text" value="kaytee29393@gmail.com" readonly="">
                                            <span class="field-validation-valid" data-valmsg-for="Email" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4">Giờ mở cửa</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="GiMoCua" name="txtGiomo"  type="time" >
                                            <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4">Giờ đóng cửa</label>
                                        <div class="col-md-8">
                                            <input class="form-control" id="MDC" name="txtGiodong"  type="time" >
                                            <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4">Loại cửa hàng</label>
                                        <div class="col-md-8">
                                            @foreach ($loaicuahang as $lch)
               
                                                <label class="checkbox-inline">
                                                    <input type="checkbox" name="loai[]" value="{{$lch->id_loaicuahang}}">{{$lch->tenloaicuahang}}
                                                </label>

                                            @endforeach
                                            <span class="field-validation-valid" data-valmsg-for="LastName" data-valmsg-replace="true"></span>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-md-4">Chọn ảnh đại diện</label>
                                        <div class="col-md-8">
                                            <input  name="chonanh" type="file">
                                        </div>
                                    </div>
                                    
                                <button type="submit" class="btn btn-default" id="submit">Thêm cửa hàng</button>
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
                </div>
            </div>
        </div>
    </div>

    <footer class="footer-page">

        <div class="wrapper-footer-page">
            <div class="container-link-wrapper">
                <div class="container-link-page">
                    <a target="_blank" href="http://foody.vn"><img src="/dangky/Content/images/foody.png"><span>Foody.vn</span></a>
                    <a target="_blank" href="http://tablenow.vn"><img src="/dangky/Content/images/tablenow.png"><span>TableNow.vn</span></a>
                    <a target="_blank" href="http://deliverynow.vn"><img src="/dangky/Content/images/delivery.png"><span>Now.vn</span></a>
                    <a target="_blank" href="http://foodypos.vn"><img src="/dangky/Content/images/foodyPOS.png"><span>FoodyPOS.vn</span></a>
                    <a target="_blank" href="http://sheis.vn"><img src="/dangky/Content/images/sheis.png"><span>Sheis.vn</span></a>
                </div>
            </div>
            <div class="container-text-wrapper">
                <ul class="language">
                    <li>
                        <a onclick="return changeLanguage('vn')" rel="nofollow" href="/home/changelanguage?code=vn&amp;returnUrl=https%3A%2F%2Fid.foody.vn%2Ftai-khoan" title="vn" style="color:#f00">
                        Vietnamese
                    </a>
                    </li>
                    <li>
                        <a onclick="return changeLanguage('en')" rel="nofollow" href="/home/changelanguage?code=en&amp;returnUrl=https%3A%2F%2Fid.foody.vn%2Ftai-khoan" title="en">
                        English
                    </a>
                    </li>

                </ul>
                <script type="text/javascript">
                    function changeLanguage(code) {
                        var languageUrl = '/Home/ChangeLanguage';
                        languageUrl = languageUrl + '?code=' + code + '&returnUrl' + location.href;
                        location.href = languageUrl;
                        return false;
                    }
                </script>

                <span>©2018 Foody Corporation. Lầu 8, Tòa nhà Jabes 1, 244 Cống Quỳnh, P. Phạm Ngũ Lão, Quận 1, TP.HCM</span>
                <span style="margin-bottom:5px;">Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012</span>
            </div>
        </div>
        <div class="footer-line"></div>
    </footer>

</body>

</html>