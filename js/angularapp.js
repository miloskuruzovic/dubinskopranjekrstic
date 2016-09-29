var DubinskoApp = angular.module('DubinskoApp', ["ngRoute"]);

DubinskoApp.config(function($routeProvider){
	$routeProvider
	.when("/", {
		templateUrl : "views/home.html"
	})
	.when("/cenovnik", {
		templateUrl : "views/cenovnik.html"
	})
	.when("/contact", {
		templateUrl : "views/contact.html"
	})
	.otherwise({
		redirectTo : "/"
	})
});

