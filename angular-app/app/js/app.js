'use strict';

angular.module('springboardApp', [
	'ngRoute',
	'ssContentApi.services',
	'springboardApp.filters',
	'springboardApp.services',
	'springboardApp.directives',
	'springboardApp.controllers'
]).
	config(['$routeProvider', function($routeProvider) {
	$routeProvider.when('/newmessage', {templateUrl: 'partials/newmessage.html', controller: 'NewMessageCtrl'});
}]);
