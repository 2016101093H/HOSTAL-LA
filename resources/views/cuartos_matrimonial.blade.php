@extends('plantilla')
    @section('contenido')
    <div class="container">
        <h1 class="title">HABITACIÓN MATRIMONIAL</h1>
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="imagenes/photos/matrimonial.png" class="img-responsive" alt="slide"></div>
                </div>

                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5"> 
                <p>Hostal LOS ÁNGELES ofrece habitaciones matrimoniales perfectas para vivir una estadía en la capital italiana junto a la persona amada y compartir con ella momentos mágicos.
                    Después de un día de paseo por Roma, el relax se vuelve algo absolutamente necesario. Disfrutad entonces de la televisión satelital y de vuestros programas preferidos, como si estuvierais en casa.
                    Relajaos en la amplia y cómoda cama para leer un libro o para navegar en internet, gracias a la conexión inalámbrica gratuita, o bien abandonaos al placer de un baño caliente en los baños privados.</p>
                </p>
                <p>
                Cada habitación está insonorizada de modo que los huéspedes puedan vivir su estadía con total libertad.
                Todas las habitaciones matrimoniales del hotel cuentan, naturalmente, con teléfono, aire acondicionado y caja fuerte.
                </p>
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
                    <div class="size-price">TAMAÑO<span>30 m<sup>2</sup></span></div>
                </div>
                <div class="col-sm-3 col-md-2">
                    <div class="size-price">PRECIO<span>S/.60.00</span></div>
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
                                <li><a href="LOSANGELES_cuartosdobles">HABITACION DOBLE</a></li>   
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