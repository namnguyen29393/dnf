function NavCtrl($http, $scope) { 
    $scope.IsShowToolTip = false;

    function applyScope() {
        if (!$scope.$$phase)
            $scope.$apply();
    }

    $scope.Init = function () {
        setTimeout(function () {
            var avatarUrl = $('#imgLeftProfileMemberAvatar').attr('src');
            $('#userAvatar').attr('src', avatarUrl);
        }, 100);
    }

    $scope.ShowToolTip = function () {
        $scope.IsShowToolTip = !$scope.IsShowToolTip;
    }

    $(window).scroll(function () {
        $scope.IsShowToolTip = false;
        applyScope();
    })
};