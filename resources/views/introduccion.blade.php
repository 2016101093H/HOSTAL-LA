@extends('plantilla')
@section('contenido')
<div class="container">
       <h1 class="title">HOSTAL LOS ÁNGELES</h1>
       <div class="row">
            <div class="col-sm-4">
                <p style="text-align: center; margin-top: 50px">Hostal "LOS ÁNGELES” está ubicado en el Av. Evitamiento N° 280, con teléfono número 945650593, y RUC 101050882.</p>
            </div>
            <div class="col-sm-4">
                <h2 style="margin-top: 0; text-align: center">MISIÓN</h2>
                <p style="text-align: center">Satisfacer las necesidades de sus clientes y huéspedes superando sus expectativas, brindándoles productos y servicios de calidad.</p>
            </div>
            <div class="col-sm-4">
                <h2 style="margin-top: 0; text-align: center">VISIÓN</h2>
                <p style="text-align: center">Para el año 2019 ser reconocido, como el Hostal líder de la zona, siendo la mejor opción para el descanso del huésped   y a la vez ser una buena experiencia para los clientes.</p>
            </div>              
       </div>


       <div class="spacer">
       <div class="embed-responsive embed-responsive-16by9"><iframe  class="embed-responsive-item" src="//player.vimeo.com/video/280025061" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
       </div>
</div>
@endsection
@section('pie')
<footer class="spacer">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7">
                            <h4>HOSTAL LOS ÁNGELES</h4>
                            <HR style="height=2px"></HR>
                            <b>
                            Nos encontramos en el gran distrito del Tambo, de la majestuosa ciudad de 
                            HUANCAYO, departamento de Junín.</b><p>  </p>
                            <p>En la dirección: Av. Evitamiento Norte - El Tambo</p>
                            <I>Referencia: 4 cuadras al suroeste de Parque Industrial</I>
                        </div>              
                        <div class="col-sm-5">
                            <h4>ACCESOS RÁPIDOS</h4>
                            <ul class="list-unstyled">
                                <li><a href="LOSANGELES">INICIO</a></li>   
                                <li><a href="LOSANGELES_introduccion">¿QUIENES SOMOS?</a></li>
                                <li><a href="LOSANGELES_cuartos">CUARTOS: DETALLES Y TARIFAS</a></li>   
                                <li><a href="LOSANGELES_galeria">GALERIA</a></li>
                                <li><a href="LOSANGELES_contactanos">CONTÁCTANOS</a></li>
                                <li><a href="LOSANGELES_cliente">RESERVACIONES</a></li>
                            </ul>
                        
                    </div>
                    <!--/.row--> 
                </div>
                <!--/.container-->    
            <!--/.footer-bottom--> 
        </footer>
        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
@endsection