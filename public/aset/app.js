var app = angular.module('sistemprediksitrenApp',['ngRoute']);
 
app.run(function(){

});

app.controller('NavController', function($scope){
	$scope.halaman = "datahistoris";
});
 
//This will handle all of our routing
app.config(function($routeProvider, $locationProvider){	
	$routeProvider.when('/',{
		templateUrl:'aset/pages/datahistoris.html',
	});
	$routeProvider.when('/sma',{
		templateUrl:'aset/pages/sma.html',
	});
	$routeProvider.when('/datatweet',{
		templateUrl:'aset/pages/datatweet.html',
	});
	$routeProvider.when('/sentianal',{
		templateUrl:'aset/pages/sentianal.html',
	});
	$routeProvider.when('/paramsvm', {
		templateUrl:'aset/pages/paramsvm.html',
	});
	$routeProvider.when('/prediksitren', {
		templateUrl:'aset/pages/prediksitren.html',
	});
});

