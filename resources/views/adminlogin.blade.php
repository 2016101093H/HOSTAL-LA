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

					<form id ="login">
						<div class = "form-group">
							<label style="color: rgb(12, 12, 12)">Nombre de Usuario</label>
							<input type ="string" id="name" name ="name" class = "form-control" required = "required" />
						</div>
						<div class = "form-group">
							<label style="color: rgb(12, 12, 12)">Contraseña</label>
							<input type ="password" id="password" name ="password" class = "form-control" required = "required" />
						</div>
						<br />
						<div class = "form-group">
							<button type="submit" name = "login" class = "form-control btn btn-primary">INGRESAR</button>
						</div>
					</form>
					<script>
					Majax.setConfig(2, 'wG71svA3uTZ8KtrOAqxqQyhuXXUC4sVfIsb2IKje','');
					var form = document.getElementById('login'),
						name = document.getElementById('name'),
						password = document.getElementById('password');
						form.addEventListener('submit', function(e){
						e.preventDefault();
						var majax = new Majax();
						majax.oauth(
							name.value,
							password.value,
							{
								valid: function(r){
									alert('Sesión iniciada');
									console.info(r);
								},
								error: function(error){
									alert('Error al ingresar');
									console.info(error);
								}
						});
					},false);
				</script>

				</div>
			</div>
		</div>
		<div class = "col-md-4"></div>
	</div>	
	<br />
	<br />
@endsection