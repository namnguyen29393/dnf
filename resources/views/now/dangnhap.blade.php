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

            <script src="/Scripts/resources/resources.js" type="text/javascript"></script>

    <style type="text/css">
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
        
<link href="/Content/Site.css" rel="stylesheet">

<div class="login-content">
    
<link href="/Content/Site.css" rel="stylesheet">

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Đăng nhập FDID</h3>
            </div>
                <div class="panel-body" style="padding: 0 15px 10px 15px;">
                    
<div class="social-login-blocks">
    
    <a class="social-accountkit-btn-phone" style="overflow: hidden;" onclick="accountkit_login_phone()">
        <div class="icon-contain-phone"><span class="fa fa-mobile mobile-icon"></span></div>
        <div class="mobile-text">ĐĂNG NHẬP BẰNG SỐ ĐIỆN THOẠI</div>
    </a>
<form id="form" action="/AccountKit/AccountKitLogin?ReturnUrl=https%3A%2F%2Fwww.now.vn%3A443%2Fda-nang" class="phone-form ng-pristine ng-valid" method="post" role="form" novalidate="novalidate">        <div class="form-group">
            <label class="control-label col-md-4">Token</label>
            <div class="col-md-8">
                <input class="form-control" id="authorizedToken" name="authorizedToken" type="text" value="">
            </div>
        </div>
</form>    <script>
        // initialize Account Kit with CSRF protection
        AccountKit_OnInteractive = function () {
            AccountKit.init(
              {
                  appId: '395614663835338',
                  state: '0862b4ac-ad19-44ec-a363-95fcc00953af',
                  version: 'v1.1',
                  debug: true
              }
            );
        };

        // login callback
        function loginCallback(response) {
            if (response.status === "PARTIALLY_AUTHENTICATED") {
                if (response.status === "PARTIALLY_AUTHENTICATED") {
                    document.getElementById("authorizedToken").value = response.code;
                    document.getElementById("form").submit();
                }
            }
            else if (response.status === "NOT_AUTHENTICATED") {
                // handle authentication failure
            }
            else if (response.status === "BAD_PARAMS") {
                // handle bad parameters
            }
        }

        // phone form submission handler
        function accountkit_login_phone() {
            var country_code = '+84';
            var ph_num = '';
            AccountKit.login('PHONE',
              { countryCode: country_code, phoneNumber: ph_num }, // will use default values if this is not specified
              loginCallback);
        }

        // email form submission handler
        function accountkit_login_email() {
            var email_address = '';
            AccountKit.login('EMAIL', { emailAddress: email_address }, loginCallback);
        }
    </script>
</div>
                </div>
            <div class="panel-body">
<form id="login-form" action="/dang-nhap?ReturnUrl=https%3A%2F%2Fwww.now.vn%3A443%2Fda-nang" method="post" role="form" novalidate="novalidate" class="ng-pristine ng-valid">                    <fieldset>
                        <a class="social-accountkit-btn-phone" style="overflow: hidden;background-color:#4066b0;margin-bottom: 10px;" provider="1" onclick="bindSocialLoginLink(this);">
                            <div class="icon-contain-phone" style="background-color:#3a5a98"><span class="fa fa-facebook mobile-icon"></span></div>
                            <div class="mobile-text">ĐĂNG NHẬP BẰNG FACEBOOK</div>
                        </a>
                        <a class="social-accountkit-btn-phone" style="display:none; overflow: hidden;background-color:#d34836" provider="2" onclick="bindSocialLoginLink(this);">
                            <div class="icon-contain-phone" style="background-color:#ba3c2b;padding: 6px 5px 5px 3px;"><span class="fa fa-google-plus mobile-icon" style="font-size: 24px !important;"></span></div>
                            <div class="mobile-text">ĐĂNG NHẬP BẰNG GOOGLE+</div>
                        </a>
                        <div class="login-line-other">
                            <span class="">hoặc bằng email</span>
                        </div>
                        <div class="form-group">
                            <div class="inner-addon left-addon">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <input autofocus="True" class="form-control" data-val="true" data-val-required="Vui lòng nhập username or email" id="Email" name="Email" placeholder="Tên đăng nhập hoặc email" type="text" value="">
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="inner-addon left-addon">
                                <i class="fa fa-lock" aria-hidden="true"></i>
                                <input class="form-control" data-val="true" data-val-required="Vui lòng nhập mật khẩu" id="Password" name="Password" placeholder="Mật khẩu" type="password">
                                
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
</form>                <div class="panel-login-type text-center martop-10">
                    
                    <p class="martop-10 text font12">
                        Chưa có tài khoản tại Foody.vn? <a href="/dang-ky?returnUrl=https%3A%2F%2Fwww.now.vn%3A443%2Fda-nang" class="link font12">Đăng ký</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

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
        <div class="col-md-6">
            <div class="sso-mess">
                Một tài khoản Foody để truy cập tất cả sản phẩm của Foody Corp.
            </div>
                <div class="container-link">
                    <a target="_blank" href="http://foody.vn"><img src="/Content/images/foody.png"><span>Foody.vn</span></a>
                    <a target="_blank" href="http://tablenow.vn"><img src="/Content/images/tablenow.png"><span>TableNow.vn</span></a>
                    <a target="_blank" href="http://deliverynow.vn"><img src="/Content/images/delivery.png"><span>Now.vn</span></a>
                    <a target="_blank" href="http://foodypos.vn"><img src="/Content/images/foodyPOS.png"><span>FoodyPOS.vn</span></a>                    
                    <a target="_blank" href="http://sheis.vn"><img src="/Content/images/sheis.png"><span>Sheis.vn</span></a>
                </div>
                    </div>
        <div class="col-md-3">
        </div>
    </div>

</div>

    </div>

    
    <footer class="footer">

        <div class="wrapper-footer">
                <ul class="language">
                <li>
                    <a onclick="return changeLanguage('vn')" rel="nofollow" href="/home/changelanguage?code=vn&amp;returnUrl=https%3A%2F%2Fid.foody.vn%2FAccount%2FLogin%3FReturnUrl%3Dhttps%3A%2F%2Fwww.now.vn%3A443%2Fda-nang" title="vn" style="color:#f00">
                        Vietnamese
                    </a>
                </li>
                <li>
                    <a onclick="return changeLanguage('en')" rel="nofollow" href="/home/changelanguage?code=en&amp;returnUrl=https%3A%2F%2Fid.foody.vn%2FAccount%2FLogin%3FReturnUrl%3Dhttps%3A%2F%2Fwww.now.vn%3A443%2Fda-nang" title="en">
                        English
                    </a>
                </li>

    </ul>
    <script type="text/javascript">
        function changeLanguage(code)
        {
            var languageUrl = '/Home/ChangeLanguage';
            languageUrl = languageUrl + '?code=' + code + '&returnUrl' + location.href;
            location.href = languageUrl;
            return false;
        }
    </script>

                <span>©2018 Foody Corporation. Lầu 8, Tòa nhà Jabes 1, 244 Cống Quỳnh, P. Phạm Ngũ Lão, Quận 1, TP.HCM</span>
                <span style="margin-bottom:5px;">Số giấy phép ĐKKD: 0311828036 do sở Kế hoạch và Đầu Tư TPHCM cấp ngày 11/06/2012</span>
        </div>
        <div class="footer-line"></div>
    </footer>

</body></html>