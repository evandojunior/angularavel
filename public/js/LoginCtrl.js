
/*app.controller('LoginCtrl', ['$scope', function ($scope) {
	$scope.login = {name: "Evando", sobrenome:"Junior"};
}])*/

app.controller('LoginCtrl', ['$scope', function ($scope) {
	$scope.showMenu = false;
	this.loginForm = function(){
			console.log($scope);
		}
}])
