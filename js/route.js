angular.module('cb', ['ngRoute'])
	.controller('checkStockController', function($scope,$http) {
		$http({
            method  :   'GET',
            url     :   './php/select_inventory.php'
        }).then(function(response) {
            $scope.listInventory = response.data;
        });
		
		$http({
            method  :   'GET',
            url     :   './php/select_inventoryXML.php'
        }).then(function(response) {
            $scope.InventoryXML = response.data;
			console.log($scope.InventoryXML);
        });
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