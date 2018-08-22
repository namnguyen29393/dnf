<html ng-app="SSOApp" class="ng-scope"><head><style type="text/css">@charset "UTF-8";[ng\:cloak],[ng-cloak],[data-ng-cloak],[x-ng-cloak],.ng-cloak,.x-ng-cloak,.ng-hide:not(.ng-hide-animate){display:none !important;}ng\:form{display:block;}.ng-animate-shim{visibility:hidden;}.ng-anchor{position:absolute;}</style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="SHORTCUT ICON" href="/favicon.ico">
    
    <script src="https://sdk.accountkit.com/en_US/sdk.js?hash=0030001b1c6c796b4653224618238cbb" async=""></script><script src="/Scripts/jquery-1.9.1.min.js"></script>
    <script src="/dangnhap/Scripts/social-login.js"></script>
    <script src="/dangnhap/Scripts/bootstrap.min.js"></script>
    <link href="/dangnhap/Content/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="/dangnhap/Content/styles.css" rel="stylesheet" type="text/css">
    <link href="/dangnhap/Content/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <script src="/dangnhap/Scripts/jquery.validate.min.js" type="text/javascript"></script>
    <script src="/dangnhap/Scripts/jquery.validate.unobtrusive.min.js" type="text/javascript"></script>
    <script src="/dangnhap/Scripts/CommonHelper.js" type="text/javascript"></script>
    <script src="/dangnhap/Scripts/angular/angular.js" type="text/javascript"></script>
    <script src="/dangnhap/Scripts/angular/SSOApp.js" type="text/javascript"></script>
    <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>

    <script src="/dangnhap/Scripts/resources/resources.js" type="text/javascript"></script>

    <style type="/dangnhap/text/css">
    [ng\:cloak], [ng-cloak], [data-ng-cloak], [x-ng-cloak], .ng-cloak, .x-ng-cloak, .ng-hide:not(.ng-hide-animate) {
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
</head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="header-line"></div>
        <a href="/">
            <div class="wrapper">
            </div>
        </a>
    </nav>
    <div class="container">

        <link href="/dangnhap/Content/Site.css" rel="stylesheet">

        <div class="login-content">

            <link href="/dangnhap/Content/Site.css" rel="stylesheet">

            

            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Đăng nhập FLS</h3>
                        </div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <div class="panel-body" style="padding: 0 15px 10px 15px;">

                        </div>
                        <div class="panel-body">
                            <form id="login-form" action="/login" method="post" role="form" novalidate="novalidate" class="ng-pristine ng-valid">                    
                                <fieldset>
                                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <a class="social-accountkit-btn-phone" style="display:none; overflow: hidden;background-color:#d34836" provider="2" onclick="bindSocialLoginLink(this);">
                                    <div class="icon-contain-phone" style="background-color:#ba3c2b;padding: 6px 5px 5px 3px;"><span class="fa fa-google-plus mobile-icon" style="font-size: 24px !important;"></span></div>
                                    <div class="mobile-text">ĐĂNG NHẬP BẰNG GOOGLE+</div>
                                </a>
                                
                                <div class="form-group">
                                    <div class="inner-addon left-addon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                        <input autofocus="True" class="form-control" data-val="true" data-val-required="Vui lòng nhập username or email" id="Email" name="email" placeholder="Tên đăng nhập hoặc email" type="text" value="">

                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="inner-addon left-addon">
                                        <i class="fa fa-lock" aria-hidden="true"></i>
                                        <input class="form-control" data-val="true" data-val-required="Vui lòng nhập mật khẩu" id="Password" name="password" placeholder="Mật khẩu" type="password">

                                    </div>
                                </div>
                                <div class="form-group">

                                    <input type="checkbox" value="true" name="RememberMe" id="RememberMe" data-val="True" checked="checked">
                                    <label for="RememberMe">Lưu đăng nhập</label>
                                    <span class="right">
                                        <a href="/tai-khoan/quen-mat-khau?returnUrl=https%3A%2F%2Fwww.now.vn%3A443%2Fda-nang" class="link">Quên mật khẩu?</a>
                                    </span>
                                    <br>
                                </div>
                                <input type="submit" value="Đăng nhập" id="bt_submit" class="btn btn-lg btn-success btn-block" style="border-radius:3px">
                            </fieldset>
                        </form>                
                        <div class="panel-login-type text-center martop-10">

                            <p class="martop-10 text font12">
                                Chưa có tài khoản? <a href="/register" class="link font12">Đăng ký</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script type="/dangnhap//dangnhaptext/javascript">

            $(function () {

                $('#login-form').submit(function (event) {
                    var value = "";
                    var valueFormat = "";

                    value = $("#Email").val();
                    valueFormat = CommonHelper.NoScriptTag(value);

                    if (value.length == 0) {
                        alert(ErrorText.Input_Email);
                        event.preventDefault();
                        return false;
                    }

                    if (value.length != valueFormat.length)
                    {
                        alert(ErrorText.Mem_Err18);
                        event.preventDefault();
                        return false;
                    }

                    value = $("#Password").val();
                    valueFormat = CommonHelper.NoScriptTag(value);

                    if (value.length == 0) {
                        alert(ErrorText.Input_Password);
                        event.preventDefault();
                        return false;
                    }

                    if (value.length != valueFormat.length) {
                        alert(ErrorText.Mem_Err19);
                        event.preventDefault();
                        return false;
                    }
                });
            });
        </script>




        <div class="row">
            <div class="col-md-3">
            </div>

            <div class="col-md-3">
            </div>
        </div>

    </div>

</div>


<footer class="footer">

    
    <div class="footer-line"></div>
</footer>

</body></html>