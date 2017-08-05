<!DOCTYPE html>
<html ng-app="app">
<head>    
	<meta name="_token" content="{{ csrf_token() }}"/>
	<title>Angularavel - @yield('title')</title>
	<link href="bower_components/lato/css/lato.css" rel="stylesheet" type="text/css">
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/lara.css">
	<script src="bower_components/jquery/dist/jquery.min.js"></script>
	<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="bower_components/angular/angular.js"></script>
	<script src="bower_components/angular-route/angular-route.js"></script>
	<script src="js/app.js" type="text/javascript"></script>
</head>
<body>
	<div class="container">
		<div class="content">
			<div class="title">Angularavel</div>
			<div class="inline">
				<p>Welcome to the new world!</p>
				<img align="center" width="240" heigth="240" src="img/angularavel.jpg">
			</div>
			<p><a ng-click="showMenu = true">Entrar</a></p>
			@yield('content')
			</div>
			<br>
			<br>
			<div class="footer">
				<p> Developed by Junior Alves</p>
			</div>
		</div>
	</div>


</body>
</html>