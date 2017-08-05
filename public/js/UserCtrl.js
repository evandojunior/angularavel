
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
