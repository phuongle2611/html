'use strict';
angular.module('myApp.view', ['ngRoute'])
.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/view', {
    templateUrl: 'view/view.html',
    controller: 'ViewCtrl'
  });
}])
.controller('ViewCtrl', ['$scope', '$window', function($scope, $window) {
      $scope.windowWidth = $window.innerWidth;
      $scope.gameHeight = 400;
}]);