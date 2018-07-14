@extends('plantilla')
    @section('contenido')
    <div class="container">
        <h1 class="title">Luxirious Suites</h1>
        <!-- RoomDetails -->
            <div id="RoomDetails" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                <div class="item active"><img src="imagenes/photos/8.jpg" class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="imagenes/photos/9.jpg"  class="img-responsive" alt="slide"></div>
                <div class="item  height-full"><img src="imagenes/photos/10.jpg"  class="img-responsive" alt="slide"></div>
                </div>
                <!-- Controls -->
                <a class="left carousel-control" href="#RoomDetails" role="button" data-slide="prev"><i class="fa fa-angle-left"></i></a>
                <a class="right carousel-control" href="#RoomDetails" role="button" data-slide="next"><i class="fa fa-angle-right"></i></a>
            </div>
    <!-- RoomCarousel-->

        <div class="room-features spacer">
            <div class="row">
                <div class="col-sm-12 col-md-5"> 
                <p>Space in your house How to sell faster than your neighbors How to make a strategic use. To discourage you by telling. To discourage you by telling. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. I m going to outline 14 different ways that I ve found you. The real goal of any talk or speech. To discourage you by telling. To discourage you by telling. Space in your house How to sell faster than your neighbors How to make a strategic use. The real goal of any talk or speech.</p>
                <p>By Learning Ways To Become Peaceful. One of the greatest barriers to making the sale is your prospect's natural. Don't stubbornly. Don't stubbornly. Don't stubbornly. -And Gain Power By Learning Ways To Become Peaceful. </p>
                </div>
                <div class="col-sm-6 col-md-3 amenitites"> 
                <h3>Amenitites</h3>    
                <ul>
                <li>One of the greatest barriers to making the sale is your prospect.</li>
                <li>Principle to work to make more money while having more fun.</li>
                <li>Unlucky people. Don't stubbornly.</li>
                <li>Principle to work to make more money while having more fun.</li>
                <li>Space in your house How to sell faster than your neighbors</li>
                </ul>
                
                </div>  
                <div class="col-sm-3 col-md-2">
                <div class="size-price">Size<span>44 sq</span></div>
                </div>
                <div class="col-sm-3 col-md-2">
                <div class="size-price">Price<span>$200.00</span></div>
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