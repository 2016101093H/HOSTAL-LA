@extends('plantilla')
@section('contenido')
    <div class="container">
        <h2>HOSTAL: LOS ÁNGELES</h2>
        <!-- form -->
            <div class="row">
                <div class="col-sm-6 wowload fadeInUp">
                    <div class="rooms"><img src="imagenes/photos/8.jpg" class="img-responsive">
                        <div class="info"><h3>Matrimoniales</h3><a href="LOSANGELES_cuartosmatrimonial" class="btn btn-default">Ir a Detalles</a></div></div></div>
                <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="imagenes/photos/9.jpg" class="img-responsive">
                        <div class="info"><h3>Individuales</h3><a href="LOSANGELES_cuartosindividuales" class="btn btn-default">Ir a Detalles</a></div></div></div>
                <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="imagenes/photos/10.jpg" class="img-responsive">
                        <div class="info"><h3>Dobles</h3><a href="LOSANGELES_cuartosdobles" class="btn btn-default">Ir a Detalles</a></div></div></div>
                <div class="col-sm-6 wowload fadeInUp"><div class="rooms"><img src="imagenes/photos/11.jpg" class="img-responsive">
                        <div class="info"><h3>Triples</h3><a href="LOSANGELES_cuartostriples" class="btn btn-default">Ir a Detalles</a></div></div></div>
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
                            </ul>
                        
                    </div>
                    <!--/.row--> 
                </div>
                <!--/.container-->    
            <!--/.footer-bottom--> 
        </footer>
        <a href="#home" class="toTop scroll"><i class="fa fa-angle-up"></i></a>
@endsection