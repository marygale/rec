var app = angular.module('recApp', ['ui.router',
    'ngRoute',
    'recApp.auth',
    'recAppControllers',
    'recAppServices'], function($interpolateProvider) {
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app.config(function($stateProvider, $urlRouterProvider) {
    /*$authProvider = 'http://localhost:8000/api/v1/authenticate';
     $urlRouterProvider.otherwise('/auth');*/
});
app.constant('HOSTNAME','http://localhost:8000')
    .constant('API_URL', 'http://localhost:8000/api/v1/')
    .constant('AUTH_URL', 'http://localhost:8000/api/v1/authenticate');

angular.module('recAppServices', []);
angular.module('recAppControllers', []);

