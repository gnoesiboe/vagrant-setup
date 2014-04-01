'use strict';

var app = angular.module('website', [
    'ngRoute',
    'ngResource'
]);

app.factory('_', function () {
    return window._;
});

app.config([ '$routeProvider', function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'views/homepage.html',
            controller: 'HomepageController'
        })
        .when('/newsitems', {
            templateUrl: 'views/newsitems.html',
            controller: 'NewsitemsController'
        })
        .otherwise({
            redirectTo: '/'
        })
    ;
}]);
