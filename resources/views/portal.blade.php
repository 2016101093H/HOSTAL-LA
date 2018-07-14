@extends('plantilla')
@section('contenido')
    <body>
        <div class="banner">    	   
            <img src="imagenes/photos/banner.jpg"  class="img-responsive" alt="slide">
            <div class="welcome-message">
                <div class="wrap-info">
                    <div class="informacion">
                        <br></br><br></br><br></br><br></br>
                        <h1  class="animated fadeInDown">HOSTAL LOS ÁNGELES</h1>
                        <p class="animated fadeInUp">La mejor opción en estancia y comida</p>                
                    </div>
                    <a href="#informacion" class="arrow-nav scroll wowload fadeInDownBig"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
        <!-- banner--> 

        <!-- reservation-information -->
        <div id="informacion" class="spacer reserve-info ">
        <div class="container">
        <div class="row">
        <div class="col-sm-7 col-md-8">
            <div class="embed-responsive embed-responsive-16by9 wowload fadeInLeft">
                <video  class="embed-responsive-item" src="/video/cuymagico.mp4" autostart="true" width="100%" height="400" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen>
                </video></div>
        </div>
       



        <!-- services -->
        <div class="spacer services wowload fadeInUp">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="RoomCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="item active"><img src="/imagenes/photos/8.jpg" class="img-responsive" alt="slide"></div>                
                        <div class="item  height-full"><img src="/imagenes/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#RoomCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#RoomCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">CUARTOS<a href="LOSANGELES_cuartos" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="TourCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="item active"><img src="/imagenes/photos/6.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/3.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/4.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#TourCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#TourCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">NUESTROS SERVICIOS<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>


                <div class="col-sm-4">
                    <!-- RoomCarousel -->
                    <div id="FoodCarousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                        <div class="item active"><img src="/imagenes/photos/1.jpg" class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/2.jpg"  class="img-responsive" alt="slide"></div>
                        <div class="item  height-full"><img src="/imagenes/photos/5.jpg"  class="img-responsive" alt="slide"></div>
                        </div>
                        <!-- Controls -->
                        <a class="left carousel-control" href="#FoodCarousel" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                        <a class="right carousel-control" href="#FoodCarousel" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <!-- RoomCarousel-->
                    <div class="caption">RESTAURANTE LOS ÁNGELES<a href="gallery.php" class="pull-right"><i class="fa fa-edit"></i></a></div>
                </div>
            </div>
        </div>
        </div>
        <!-- services -->
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
       

            <script src="/js/jquery.js"></script>
            <!-- wow script -->
            <script src="/js/wow.min.js"></script>
            <!-- uniform -->
            <script src="/js/jquery.uniform.js"></script>
            <!-- boostrap -->
            <script src="/js/bootstrap.js" type="text/javascript" ></script>
            <!-- jquery mobile -->
            <script src="/js/touchSwipe.min.js"></script>
            <!-- jquery mobile -->
            <script src="/js/respond.js"></script>
            <!-- gallery -->
            <script src="/js/jquery.blueimp-gallery.min.js"></script>
            <!-- custom script -->
            <script src="/js/script.js"></script>
@endsection