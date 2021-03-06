'use strict';
// Declare app module and its dependencies on views, and components
angular.module('myApp', [
  'ngRoute',
  'myApp.view',
  'myApp.services',
  'myApp.uiClasses',
  'myApp.directives'
]).
config(['$routeProvider', function($routeProvider) {
  $routeProvider.otherwise({redirectTo: '/view'});
}]);
var uiClasses = angular.module('myApp.uiClasses', []);
var myServices = angular.module('myApp.services', []);
var myDirectives = angular.module('myApp.directives', []);