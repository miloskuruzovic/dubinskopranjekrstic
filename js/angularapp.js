var DubinskoApp = angular.module('DubinskoApp', ["ngRoute"]);

DubinskoApp.config(function($routeProvider){
	$routeProvider
	.when("/", {
		templateUrl : "views/home.html",
		controller : "akcija_ctrl"
	})
	.when("/cenovnik", {
		templateUrl : "views/cenovnik.html",
		controller : "cenovnik_ctrl"
	})
	.when("/contact", {
		templateUrl : "views/contact.html"
	})
	.when("/galerija", {
		templateUrl: "views/gallery.html"
	})
	.when("/apr", {
		templateUrl : "views/apr.html"
	})
	.otherwise({
		redirectTo : "/"
	})
});

DubinskoApp.controller("akcija_ctrl", function($scope, $http){
	$http.get("models/akcija_model.php").success(function(data){
		$scope.naslov = data['naslov'];
		$scope.akcije = data['akcije'];
		$scope.automobili = data['automobili'];
		$scope.namestaj = data['namestaj'];
		$scope.duseci = data['duseci'];
	});
});

DubinskoApp.controller("cenovnik_ctrl", function($scope, $http){
	$http.get("models/akcija_model.php").success(function(data){
		$scope.automobili = data['automobili'];
		$scope.namestaj = data['namestaj'];
		$scope.duseci = data['duseci'];
	});
});
