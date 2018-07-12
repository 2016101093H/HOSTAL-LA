@extends('plantilla')
@section('contenido')
    <div class="container">
        <h1 class="title">Gallery</h1>
        <div class="row gallery">
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/1.jpg" title="Foods" class="gallery-image" data-gallery><img src="imagenes/photos/1.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes//photos/2.jpg" title="Coffee" class="gallery-image" data-gallery><img src="imagenes/photos/2.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/3.jpg" title="Travel" class="gallery-image" data-gallery><img src="imagenes/photos/3.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/4.jpg" title="Adventure" class="gallery-image" data-gallery><img src="imagenes/photos/4.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/5.jpg" title="Fruits" class="gallery-image" data-gallery><img src="imagenes/photos/5.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/6.jpg" title="Summer" class="gallery-image" data-gallery><img src="imagenes/photos/6.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/7.jpg" title="Bathroom" class="gallery-image" data-gallery><img src="imagenes/photos/7.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/8.jpg" title="Rooms" class="gallery-image" data-gallery><img src="imagenes/photos/8.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/9.jpg" title="Big Room" class="gallery-image" data-gallery><img src="imagenes/photos/9.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/11.jpg" title="Living Room" class="gallery-image" data-gallery><img src="imagenes/photos/11.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/1.jpg" title="Fruits" class="gallery-image" data-gallery><img src="imagenes/photos/1.jpg" class="img-responsive"></a></div>
            <div class="col-sm-4 wowload fadeInUp"><a href="imagenes/photos/3.jpg" title="Travel" class="gallery-image" data-gallery><img src="imagenes/photos/3.jpg" class="img-responsive"></a></div>
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
                    </div>
                    <!--/.row--> 
                </div>
                <!--/.container-->    
            <!--/.footer-bottom--> 
        </footer>

        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
@endsection