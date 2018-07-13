@extends('plantilla')
@section('contenido')
<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Reserva en línea del hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i></a>
					<ul class="dropdown-menu">
						<li><a href="logout.php"><i class = "glyphicon glyphicon-off"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<div class = "container-fluid">	
		<ul class = "nav nav-pills">
			<li><a href = "home.php">Inicio</a></li>
			<li class = "active"><a href = "LOSANGELES_adminportaL_cuenta">Cuentas</a></li>
			<li><a href = "LOSANGELES_adminportal_reserva">Reserva</a></li>
			<li><a href = "LOSANGELES_adminportal_habitaciones">Habitación</a></li>	
					
		</ul>	
	</div>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<div class = "alert alert-info">Cuentas</div>
				<a class = "btn btn-success" href = "add_LOSANGELES_adminportaL_cuenta"><i class = "glyphicon glyphicon-plus"></i> Crear una nueva cuenta</a>
				<br />
				<br />
				<table id = "table" class = "table table-bordered">
					<thead>
						<tr>
					
						<th> Nombre </th>
						<th> Nombre de usuario </th>
						<th> Contraseña </th>
						<th> Acción </th>
						</tr>
					</thead>
					
				</table>
			</div>
		</div>
	</div>
	<br />
	<br />
</body>
<script src = "../js/jquery.js"></script>
<script src = "../js/bootstrap.js"></script>
<script src = "../js/jquery.dataTables.js"></script>
<script src = "../js/dataTables.bootstrap.js"></script>	
<script type = "text/javascript">
	function confirmationDelete(anchor){
		var conf = confirm("Are you sure you want to delete this record?");
		if(conf){
			window.location = anchor.attr("href");
		}
	} 
</script>

<script type = "text/javascript">
	$(document).ready(function(){
		$("#table").DataTable();
	});
</script>
@endsection

