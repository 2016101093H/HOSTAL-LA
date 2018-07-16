<!doctype html>
<html lang="es">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>HOSTAL - LOS ANGELES</title>

            <link rel="stylesheet" href="/css/estilo.css">
  
            <link rel="stylesheet" href="/css/bootstrap.min.css" />

            <link rel="stylesheet" href="/css/animate.css" />

            <script src="/js/jquery.js"></script>

            <script src="/js/respond.js"></script>

            <script src="/js/majax.js"></script>

            <link rel="shortcut icon" href="imagenes/12345678.png" type="image/x-icon">
            <link rel="icon" href="imagenes/12345678.png" type="image/x-icon">

            <nav class="navbar  navbar-default" role="navigation" style="padding-bottom: 20px;padding-top: 20px">
                <div class="container">
                <table>
                    <tr>
                        <td>
                            <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only" style="color: black">Barra de Navegación</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <img src="imagenes/1234567.png" class="img-responsive" alt="logo">
                            </div>
                        </td>
                        <td>
                            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav">        
                                <li><a href="LOSANGELES">INICIO</a></li>
                                <li><a href = "LOSANGELES_adminportal_cliente">RESERVAS</a></li>	
                                <li><a href="LOSANGELES_galeria">GALERIA</a></li>
                                </ul>
                            </div>
                        </td>
                    </tr>
                </table>
                </div>
            </nav>
        </head>
    <body>
        @yield('contenido')
        @yield('pie')
    </body>
</html>
