@extends('plantilla')
@section('contenido')
    <div class="container">
        <h1 class="title">CONTÁCTANOS</h1>
        <!-- form -->
        <div class="contact">
            <div class="row">
                <div class="col-sm-12">
                    <div class="map">
                    <div class="col-sm-6 col-sm-offset-3">
                        <div class="spacer">   		
                            <h4>Escríbemos, te queremos escuchar</h4>
                            <form role="form">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="apellidos" placeholder="Apellidos">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="nombres" placeholder="Nombres">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" id="email" placeholder="Correo Electrónico" maxlength=40>
                                </div>
                                <div class="form-group">
                                    <input type="Phone" class="form-control" id="phone" placeholder="Celular" maxlength=9>
                                </div>       
                                <button type="submit" class="btn btn-default">ME HARÉ ESCUCHAR</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- form -->
    </div>
@endsection
@section('pie')
    <footer class="spacer">
        <div class="container">
                <div class="row">
                    <div class="col-sm-5">
                         <h4>HOSTAL LOS ÁNGELES</h4>
                            <HR style="height=2px"></HR>
                            <b>
                            Nos encontramos en el gran distrito del Tambo, de la majestuosa ciudad de 
                            HUANCAYO, departamento de Junín.</b><p>  </p>
                            <p>En la dirección: Av. Evitamiento Norte - El Tambo</p>
                            <I>Referencia: 4 cuadras al suroeste de Parque Industrial</I>
                    </div>              
                            
                    <div class="col-sm-3">
                        <h4>ACCESOS RÁPIDOS</h4>
                           <ul class="list-unstyled">
                                <li><a href="LOSANGELES">INICIO</a></li>   
                                <li><a href="LOSANGELES_introduccion">¿QUIENES SOMOS?</a></li>
                                <li><a href="LOSANGELES_cuartos">CUARTOS: DETALLES Y TARIFAS</a></li>   
                                <li><a href="LOSANGELES_galeria">GALERIA</a></li>
                                <li><a href="LOSANGELES_contactanos">CONTÁCTANOS</a></li>
                            </ul>
                    </div>
                    <div class="col-sm-4 subscribe">
                        <h4>SUSCRÍBETE</h4>
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Ingresa tu correo electrónico">
                            <span class="input-group-btn">
                            <button class="btn btn-default" type="button">ENVIAR</button>
                            </span>
                    </div>
                    <div class="social">
                       <a href="#"><i class="fa fa-facebook-square" data-toggle="tooltip" data-placement="top" data-original-title="facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"  data-toggle="tooltip" data-placement="top" data-original-title="instragram"></i></a>
                        <a href="#"><i class="fa fa-twitter-square" data-toggle="tooltip" data-placement="top" data-original-title="twitter"></i></a>
                        <a href="#"><i class="fa fa-pinterest-square" data-toggle="tooltip" data-placement="top" data-original-title="pinterest"></i></a>
                        <a href="#"><i class="fa fa-tumblr-square" data-toggle="tooltip" data-placement="top" data-original-title="tumblr"></i></a>
                        <a href="#"><i class="fa fa-youtube-square" data-toggle="tooltip" data-placement="top" data-original-title="youtube"></i></a>
                    </div>
                </div>
                        <!--/.row--> 
        </div>
                    <!--/.container-->    
                <!--/.footer-bottom--> 
    </footer>

            <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
@endsection