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
		   <label for="password">
		   Contraseña:
		   </label>
		   <input type="password" id="password" name="password">
		   <button type="submit">Ingresar</a>
		   </button>
		   </form>	
		   <script >
		   Majax.setConfig(2, 'WMfVbQx4q0ffhhdzjCx33kBJ6WuQew4dfZobzbcR','');
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