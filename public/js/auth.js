(function () {
    angular.module('recApp.auth', [])

        .config(function($routeProvider){
            $routeProvider.when("/register", {
                templateUrl: "register.html",
                controller: "UserController as uc"
            });
        });
       /* .config(['$stateProvider', '$routeProvider', function($stateProvider, $routeProvider) {
            $stateProvider

        }]);*/

})();