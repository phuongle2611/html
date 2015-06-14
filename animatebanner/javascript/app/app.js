var app = angular.module('myApp', []);
app.controller('myCtrl', ['$scope','$window',function($scope,$window) {
	$scope.windowWidth = $window.innerWidth;
    $scope.gameHeight = 400;
}]);
