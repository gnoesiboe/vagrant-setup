'use strict';

window.describe('Controller: HomepageController', function () {

    beforeEach(module('website'));

    var homepageController = null,
        scope;

    beforeEach(inject(function ($controller, $rootScope) {
        scope = $rootScope.$new();

        homepageController = $controller('HomepageController', {
            $scope: scope
        });
    }));

    it('should add a something variable to the scope', function () {
        expect(typeof scope.something !== 'undefined').toBe(true);
    });

    it('the something variable should be an array', function () {
        expect(_.isArray(scope.something)).toBe(true);
    });

    it('the something variable should hold six items', function () {
        expect(scope.something.length).toBe(6);
    });
});
