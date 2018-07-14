@extends('plantilla')
@section('contenido')
        <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
                <div  class = "container-fluid">
                    <div class = "navbar-header">
                        <a class = "navbar-brand" >Reserva en línea del hotel</a>
                    </div>
                    <ul class = "nav navbar-nav pull-right ">
                        <li class = "dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
            <div class = "container-fluid">	
                <ul class = "nav nav-pills">
                    <li class = "active"><a href = "LOSANGELES_adminportaL_cuenta">Cuentas</a></li>
                    <li><a href = "LOSANGELES_adminportal_reserva">Reserva</a></li>
                    <li><a href = "LOSANGELES_adminportal_habitaciones">Habitación</a></li>	
                                    
                </ul>	
            </div>
            <br />
            <div class = "container-fluid">	
                <div class = "panel panel-default">
                    <?php
                    ?>
                    <div class = "panel-body">
                        <a class = "btn btn-success disabled"><span class = "badge"></span> Pendientes</a>
                        <a class = "btn btn-info" href = "checkin.php"><span class = "badge"></span> Registrarse</a>
                        <a class = "btn btn-warning" href = "checkout.php"><i class = "glyphicon glyphicon-eye-open"></i> Revisa</a>
                        <br />
                        <br />
                        <table id = "table" class = "table table-bordered">
                            <thead>
                                <tr>
                            <th> Nombre </th>
                            <th> Contacto No </th>
                            <th> Tipo de habitación </th>
                            <th> Fecha reservada </th>
                            <th> Estado </th>
                            <th> Acción </th>
                                </tr>
                            </thead>

                        </table>
                    </div>
                </div>
            </div>
            <br />
            <br />
        </body>
        
@endsection