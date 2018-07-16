@extends('plantilla')
    @section('contenido')
    <div class="container">
        <h1 class="title">HABITACIONES DOBLES</h1>
        <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="imagenes/photos/IMG_0021.JPG" class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
    <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5"> 
                <p>Hostal LOS ÁNGELES dispone de habitaciones con dos camas separadas, ideales para un viaje con amigos o colegas que deseen dormir en la misma habitación.</p>
                <p>Las habitaciones dobles son la opción ideal para aquellos que se encuentran en Roma por motivos de trabajo, porque además del relax después de un día de trabajo intenso, 
                    ofrecen una conexión inalámbrica gratuita, ideal para chequear el correo electrónico, consultar información y poder trabajar cuando lo necesite.</p>
                <p>Las habitaciones son amplias, cómodas y muy luminosas; disponen de baños privados, televisión y aire acondicionado.</p>
                </div>

                <div class="col-sm-6 col-md-3 amenitites"> 
                <h3>COMODIDAD</h3>    
                <ul>
                <li>Aire acondicionado</li>
                <li>TV satelital</li>
                <li>Teléfono con línea directa</li>
                <li>Conexión Wi-i gratuita</li>
                <li>Colchón de látex</li>
                <li>Caja de seguridad</li>
                </ul>
                </div>
                
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">TAMAÑO<span>28 m<sup>2</sup></span></div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">PRECIO<span>S/.40.00</span></div>
                </div>
            </div>
        </div>             
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
                                <li><a href="LOSANGELES_cliente">RESERVACIONES</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-3">
                            <h4>OTRAS HABITACIONES</h4>
                            <ul class="list-unstyled">
                                <li><a href="LOSANGELES_cuartosmatrimonial">HABITACION MATRIMONIAL</a></li>   
                                <li><a href="LOSANGELES_cuartosindividuales">HABITACION INDIVIDUAL</a></li>   
                                <li><a href="LOSANGELES_cuartostriples">HABITACION TRIPLE</a></li>   
                            </ul>
                        </div>
                    <!--/.row--> 
                </div>
                <!--/.container-->    
            <!--/.footer-bottom--> 
        </footer>
        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
@endsection