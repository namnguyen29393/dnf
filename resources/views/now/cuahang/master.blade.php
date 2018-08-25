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
    <title>Quản lý tài khoản</title>
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
                    <li >
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
                            <img id="imgLeftProfileMemberAvatar" src="/upload/icon/userlogin.png" class="img-responsive" alt="">
                        </div>
                        <div class="profile-usertitle">
                            <div class="profile-usertitle-name">
                                {{Auth::user()->name}}
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
                                <li id="proInfo">
                                    <a href="/thongtinsanpham/danhsach">
                                        <i class="fa fa-pencil-square-o "></i> Danh sách sản phẩm
                                    </a>
                                </li>
                                <li id="dsloaisp">
                                    <a href="/thongtinsanpham/danhsachloaisp">
                                        <i class="fa fa-pencil-square-o "></i> Danh sách loại sản phẩm
                                    </a>
                                </li>
                                <li id="themloaisp">
                                    <a href="/thongtinsanpham/themloaisanpham">
                                        <i class="fa fa-pencil-square-o "></i> Thêm loại sản phẩm
                                    </a>
                                </li>
                                <li id="themsp">
                                    <a href="/thongtinsanpham/them">
                                        <i class="fa fa-pencil-square-o "></i> Thêm sản phẩm
                                    </a>
                                </li>
                                <li id="proChangePass">
                                    <a href="{{route('thongtinsanpham.doimatkhau')}}">
                                        <i class="fa fa-user"></i> Đổi mật khẩu
                                    </a>
                                </li>
                                
                                <li>
                                    <a href="/">
                                        <i class="fa fa-sign-out"></i> Thoát
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    {{--Center--}}

                        @yield('content')


                </div>
            </div>
        </div>
    </div>

</body>

</html>