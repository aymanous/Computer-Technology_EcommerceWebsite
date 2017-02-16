var app = angular.module("myApp", []);

app.config(function($interpolateProvider){
    $interpolateProvider.startSymbol('[[').endSymbol(']]');
});


app.controller("myCtrl",function ($scope,$http)
{
    $scope.categories = [];
	$http({
		  method: 'GET',
		  url:'http://127.0.0.1:8080/app_dev.php/acme/categories'
		}).then(function successCallback(response) {
		    $scope.categories=response.data;
		  }, function errorCallback(response) {
		    // called asynchronously if an error occurs
		    // or server returns response with an error status.
		  });

	$scope.getCategory = function(category){
	$http({
		  method: 'GET',
		  url:'http://127.0.0.1:8080/app_dev.php/acme/categories/'+category
		}).then(function successCallback(response) {
		    $scope.products=response.data;
		  }, function errorCallback(response) {
		   
		});
		$route.reload();
	};
    
	$http({
		  method: 'GET',
		  url:'http://127.0.0.1:8080/app_dev.php/acme/products'
		}).then(function successCallback(response) {
		    $scope.products=response.data;
		  }, function errorCallback(response) {
		   
		});

	
});



