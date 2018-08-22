function AccountInfoCtrl($http, $scope) {
    var _bPopup = null;
    $scope.Init = function () {
        if (location.pathname == '/tai-khoan/doi-mat-khau' || location.pathname == '/account/change-password')
            return;
        setTimeout(function () {
            if ($.cookie("hide-pvp") != "true") {
                var target = $("#ppVerifyPassword");
                _bPopup = target.bPopup(
            {
                followSpeed: 0,
                modalClose: false,
                escClose: false,
            });
                _bPopup.reposition();
            }
        }, 500);

    }
    $scope.SetPassword = function (url) {
        if (url != null) {
            setSession();
            setTimeout(function () {
                location.href = url;
            },500)
        }
        else {
            setSession();
            hidePopup();
        }
    }
    function hidePopup() {
        if (_bPopup)
            _bPopup.close();
    }
    function setSession() {
        $.cookie("hide-pvp", true, {path:'/'});
    }

};