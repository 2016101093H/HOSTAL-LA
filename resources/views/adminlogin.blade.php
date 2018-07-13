@extends('plantilla')
@section('contenido')

    <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
        <div  class = "container-fluid">
			<div class = "navbar-header" style="position:center">
				<a class = "navbar-brand">HOSTAL LOS ANGELES</a>
			</div>
		</div>
	</nav>
	<div class = "container">
		<br />
		<br />
		<div class = "col-md-4"></div>
		<div class = "col-md-4">
			<div class = "panel panel-danger">
				<div class = "panel-heading">
					<h4>Administrador</h4>
				</div>
				<div class = "panel-body">

		<form id="login" style="color: rgb(1,1,1)">
	    <legend>
		   Inicio de Sesion
		   </legend>
		   <label for="email">
		   		Correo:
		   </label>
		   <input type="email" id="email" name="email">
		   </br>
		   <label for="password">
		   		Contraseña:
		   </label>
		   <input type="password" id="password" name="password">
		   <button type="submit">Ingresar</a>
		   </button>
		   </form>	
		   <script >
		   Majax.setConfig(2, 'wG71svA3uTZ8KtrOAqxqQyhuXXUC4sVfIsb2IKje','');
		   var form = document.getElementById('login'),
		       email = document.getElementById('email'),
			   password = document.getElementById('password');
			  form.addEventListener('submit',function(e){
				  e.preventDefault();
				  var majax = new Majax();
				  majax.oauth(email.value,
				              password.value,
							  {
								  valid: function(r){
									  alert('Sesión iniciada');
									  console.info(r);
									  document.getElementById('administrador').style.display="block";
									  document.getElementById('login').style.display = "none";
								  },
								  error: function(error){
									  alert('Error al ingresar');
									  console.info(error);
								  }
							  } );
			  },false);
			  </script>
			 

				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>
	<div id="administrador" style="display:none">
	<button id='neko' ><a href='LOSANGELES_galeria'>INTERFAZ PROPIA DEL ADMINISTRADOR</a></button>
	<h1>dfsdfsa</h1>
	</div>	
	<br />
	<br />
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