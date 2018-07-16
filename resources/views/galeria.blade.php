@extends('plantilla')
@section('contenido')
    <div class="container">
        <h1 class="title">Gallery</h1>
        <div class="row gallery">
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/cama1.png" class="gallery-image" data-gallery><img src="imagenes/photos/cama1.png" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes//photos/cama2.png" class="gallery-image" data-gallery><img src="imagenes/photos/cama2.png" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/cama3.png" class="gallery-image" data-gallery><img src="imagenes/photos/cama3.png" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/8.jpg" class="gallery-image" data-gallery><img src="imagenes/photos/8.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0020.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0020.JPG" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0021.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0021.JPG" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0022.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0022.JPG" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0025.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0025.JPG" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0024.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0024.JPG" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0023.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0023.JPG" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/IMG_0036.JPG" class="gallery-image" data-gallery><img src="imagenes/photos/IMG_0036.JPG" class="img-responsive"></a></div>

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
                    </div>
                </div>
        </footer>

        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>

@endsection