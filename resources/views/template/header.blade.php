<!DOCTYPE html>
<html lang="en" ng-app="app">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title>Angularavel</title>
	<!-- Bootstrap Core CSS -->
	<link href="bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="bower_components/startbootstrap-sb-admin/css/sb-admin.css" rel="stylesheet">
	<!-- Morris Charts CSS -->
	<link href="bower_components/startbootstrap-sb-admin/css/css/plugins/morris.css" rel="stylesheet">
	<!-- Custom Fonts -->
	<link href="bower_components/startbootstrap-sb-admin/font-awesome/css/font-awesome.min.css" rel="stylesheet">
	<script src="bower_components/angular/angular.min.js"></script>
	<script src="bower_components/angular-route/angular-route.min.js"> </script>
	<script src="bower_components/angular-resource/angular-resource.min.\ js"></script>
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<div id="wrapper">
			<!-- Navigation -->
			<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="img/angularjs-large.png" height="34" width="164"></a>
				</div>
				<!-- Top Menu Items -->
				<ul class="nav navbar-right top-nav">
					<li class="dropdown" ng-controller="MsgnCtrl">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
						<ul class="dropdown-menu message-dropdown" >
							<li class="message-preview" ng-repeat="msgn in msgns">
								<a href="#">
									<div class="media">
										<span class="pull-left">
											<img class="media-object" src="http://placehold.it/50x50" alt="">
										</span>
										<div class="media-body">
											<h5 class="media-heading"><strong>@{{msgn.name}}</strong>
											</h5>
											<p class="small text-muted">@{{msgn.data}} <i class="fa fa-clock-o"></i> @{{msgn.hora}}</p>
											<p>@{{msgn.conteudo}}</p>
										</div>
									</div>
								</a>
							</li>
							<li class="message-footer">
								<a href="#">Marcar como lidas</a>
							</li>
						</ul>
					</li>
					<li class="dropdown" ng-controller="LoginCtrl">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i> @{{login.name +' '+login.sobrenome}} <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li>
								<a href="#"><i class="fa fa-fw fa-user"></i> Perfil</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-fw fa-gear"></i> Configurações</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="/"><i class="fa fa-fw fa-power-off"></i> Sair</a>
							</li>
						</ul>
					</li>
				</ul>
				<!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav side-nav">
						<li class="active">
							<a href="/home"><i class="fa fa-fw fa-dashboard"></i> Dashboard</a>
						</li>
						<li>
							<a href="/charts"><i class="fa fa-fw fa-bar-chart-o"></i> Charts</a>
						</li>
						<li>
							<a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
						</li>
						<li>
							<a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
						</li>
						<li>
							<a href="bootstrap-elements.html"><i class="fa fa-fw fa-desktop"></i> Bootstrap Elements</a>
						</li>
						<li>
							<a href="bootstrap-grid.html"><i class="fa fa-fw fa-wrench"></i> Bootstrap Grid</a>
						</li>
						<li>
							<a href="javascript:;" data-toggle="collapse" data-target="#demo"><i class="fa fa-fw fa-arrows-v"></i> Dropdown <i class="fa fa-fw fa-caret-down"></i></a>
							<ul id="demo" class="collapse">
								<li>
									<a href="#">Dropdown Item</a>
								</li>
								<li>
									<a href="#">Dropdown Item</a>
								</li>
							</ul>
						</li>
						<li>
							<a href="blank-page.html"><i class="fa fa-fw fa-file"></i> Blank Page</a>
						</li>
						<li>
							<a href="index-rtl.html"><i class="fa fa-fw fa-dashboard"></i> RTL Dashboard</a>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</nav>

			<div id="page-wrapper">