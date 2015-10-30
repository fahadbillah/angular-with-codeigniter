'use strict';

/**
 * @ngdoc overview
 * @name ngci
 * @description
 * # ngci
 *
 * Main module of the application.
 */
 angular
 .module('ngci', [
 	'ngRoute',
 	])
 .config(function ($routeProvider, $locationProvider) {
 	$routeProvider
 	.when('/about/time', {
 		title: 'Home',
 		templateUrl: 'index.php/main/home',
 		controller: 'HomeCtrl'
 	})
 	.when('/about/:company', {
 		title: 'About',
 		templateUrl: 'index.php/main/about',
 		controller: 'AboutCtrl'
 	})
 	.otherwise({
 		redirectTo: '/'
 	});
 })
 .run(['$rootScope', function ($rootScope) {
 	$rootScope.$on('$routeChangeSuccess', function(event, current, previous) {
 		$rootScope.title = current.$$route.title;
 	});
 }]);
