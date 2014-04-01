'use strict';

angular.module('website')
    .controller('HomepageController', [ '$scope', function ($scope) {
        $scope.something = [
            'eerste',
            'tweede',
            'derde',
            'vierde',
            'vijfde',
            'zesde'
        ];
    }]);
