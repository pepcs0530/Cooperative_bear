angular.module('cb', ['ngRoute'])
	.controller('checkStockController', function($scope,$http) {
		alert("test");
    })
	
	.config(['$routeProvider',
	function($routeProvider) {
      $routeProvider
          .when(
            '/checkStock',{
                templateUrl: './html/checkStock.html',
                controller: 'checkStockController'
          }
          ).otherwise({
                redirectTo: '/'
      	  });
      	  
	}]);