@extends('plantilla')
    @section('contenido')
    <div class="container">
        <h1 class="title">HABITACIONES INDIVIDUALES</h1>
        <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="imagenes/photos/IMG_0027.JPG" class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
    <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5"> 
                <p>Hostal LOS ÁNGELES dispone de habitaciones individuales amplias y muy luminosas, la opción ideal para quien viaja por trabajo pero no por esto desea renunciar al confort.</p>
                <p>Las habitaciones individuales del hotel cuentan con una decoración fina y cuidada, disponen de baños privados, teléfono, conexión a internet inalámbrica, caja fuerte, aire acondicionado y televisión.
                    Son habitaciones perfectas para descansar después de un día de trabajo intenso en la capital, después de un congreso, de una reunión, un simposio o un simple paseo turístico por el centro de la ciudad.</p>
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
                    <div class="size-price">TAMAÑO<span>12 m<sup>2</sup></span></div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">PRECIO<span>S/.30.00</span></div>
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
                                <li><a href="LOSANGELES_cuartosdobles">HABITACION DOBLE</a></li>   
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