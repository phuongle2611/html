'use strict';
angular.module('myApp.view1', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view1', {
    templateUrl: 'view1/view1.html',
    controller: 'View1Ctrl'
  });
}])
.controller('View1Ctrl', ['$scope', '$window', function($scope, $window) {
      //$scope.windowWidth = 1920;//$window.innerWidth;
      //$scope.gameHeight = 400;
}]);