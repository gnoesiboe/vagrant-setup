'use strict';

var app = angular.module('website', [
    'ngRoute',
    'ngResource'
]);

app.config([ '$routeProvider', function ($routeProvider) {
    $routeProvider
        .when('/', {
            templateUrl: 'views/homepage.html',
            controller: 'HomepageController'
        });
}]);
