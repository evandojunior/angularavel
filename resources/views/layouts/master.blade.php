<!-- Stored in resources/views/layouts/master.blade.php -->
<!doctype html>
<html ng-app="app"> 
<head>
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css"> 
<link rel="stylesheet" href="bower_components/startbootstrap-scrolling-nav/css/scrolling-nav.css">
<title>Angularavel - @yield('title')</title>
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
@yield('navbar')
    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a class="page-scroll" href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#about">About</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#services">Services</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
		@yield('content')
</body>
</html>
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"> </script>
<script src="bower_components/startbootstrap-scrolling-nav/js/jquery.easing.min.js"></script>
<script src="bower_components/startbootstrap-scrolling-nav/js/scrolling-nav.js"></script>
<script src="bower_components/angular/angular.min.js"></script>
<script src="bower_components/angular-route/angular-route.min.js"> </script>
<script src="bower_components/angular-resource/angular-resource.min.\ js"></script>
<script src="js/app.js"></script>
</body>
</html>