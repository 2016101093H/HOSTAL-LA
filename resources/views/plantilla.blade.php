<!doctype html>
<html lang="es">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>HOSTAL - LOS ANGELES</title>
            <!-- Fonts -->
            <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
            <link rel="stylesheet" href="/css/estilo.css">
            <!-- font awesome -->
            <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

            <!-- bootstrap -->
            <link rel="stylesheet" href="/css/bootstrap.min.css" />
            <!-- uniform -->
            <link type="text/css" rel="stylesheet" href="/css/uniform.default.min.css" />
            <!-- animate.css -->
            <link rel="stylesheet" href="/css/animate.css" />
            <!-- gallery -->
            <link rel="stylesheet" href="/css/blueimp-gallery.min.css">

            <!-- favicon -->
            <link rel="shortcut icon" href="/imagenes/favicon.png">
            <link rel="icon" href="/imagenes/favicon.png">
            <script src="/js/jquery.js"></script>
            <!-- wow script -->
            <script src="/js/wow/wow.min.js"></script>
            <!-- uniform -->
            <script src="/js/jquery.uniform.js"></script>
            <!-- boostrap -->
            <script src="/js/bootstrap.js" type="text/javascript" ></script>
            <!-- jquery mobile -->
            <script src="/js/touchSwipe.min.js"></script>
            <!-- jquery mobile -->
            <script src="/js/respond/respond.js"></script>
            <!-- gallery -->
            <script src="/js/jquery.blueimp-gallery.min.js"></script>
            <!-- custom script -->
            <script src="/js/script.js"></script>

            <nav class="navbar  navbar-default" role="navigation">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"><img src="images/logo.png"  alt="logo"></a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                    
                    <ul class="nav navbar-nav">        
                        <li><a href="index.php">INICIO</a></li>   
                        <li><a href="introduction.php">¿QUIENES SOMOS?</a></li>
                        <li><a href="rooms-tariff.php">CUARTOS Y TARIFAS</a></li>   
                        <li><a href="gallery.php">GALERIA</a></li>
                        <li><a href="contact.php">CONTACTANOS</a></li>
                    </ul>
                    </div><!-- Wnavbar-collapse -->
                </div><!-- container-fluid -->
            </nav>
        </head>


    <body>
        @yield('contenido')
        @yield('pie')
    </body>
</html>
