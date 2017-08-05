app = new angular.module('app',['ngRoute']);

app.config(['$routeProvider',function($routeProvider){ $routeProvider.
	when('/home',{controller:'UserCtrl',
		templateUrl:'/user'}).
	when('/users',{controller:'UserCtrl',
		templateUrl:'/user'}).
	otherwise({redirectTo:'/'});
}]);



app.controller('UserCtrl', function($scope, $http){
		// /user <- é a rota do laravel onde retornar os usuarios
		$http.get("/user").then(function(response){ 
			//Retorna o campo data do response
			$scope.users = response.data;
			$scope.orderProp = 'id';
		},function(response){
			$scope.error.title = "Error " + response.status
			if(response.statusText == 'Not Found'){
				$scope.error.message = 'Ops! Nada foi encontrado :(';
			}else{
				$scope.error.message = response.statusText;
			}
			$('#errorModal').modal();
			console.warn(response);
		});
	});

app.controller('LoginCtrl', ['$scope', function($scope) {
      $scope.list = [];
      console.log($scope.username);
      $scope.submit = function() {
        if ($scope.username) {
          $scope.list.push(this.username);
          $scope.username = 'FOI';
        }
      };
    }]);
