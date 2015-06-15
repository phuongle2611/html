var app = angular.module('myApp', []);
app.controller('myCtrl', ['$scope','$window',function($scope,$window) {
	$scope.gameWidth = $window.innerWidth;
    $scope.gameHeight = 400;
}]);
