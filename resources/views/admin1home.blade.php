@extends('plantilladmin')
@section('contenido')
<nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
		<div  class = "container-fluid">
			<div class = "navbar-header">
				<a class = "navbar-brand" >Reserva en línea del hotel</a>
			</div>
			<ul class = "nav navbar-nav pull-right ">
				<li class = "dropdown">
					<a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class = "glyphicon glyphicon-user"></i>
                    </a>
					<ul class="dropdown-menu">
						<li><a href=""><i class ="glyphicon glyphicon-off"></i> Cerrrar sesion</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</nav>
	<br />
	<div class = "container-fluid">
		<div class = "panel panel-default">
			<div class = "panel-body">
				<center><img src = "/imagenes/photos/IMG_0030.JPG" class="img-responsive" alt="slide"></center>
			</div>
		</div>
	</div>
@endsection