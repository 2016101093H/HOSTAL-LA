@extends('plantilla')
@section('contenido')
        <nav style = "background-color:rgba(0, 0, 0, 0.1);" class = "navbar navbar-default">
                <div  class = "container-fluid">
                    <div class = "navbar-header">
                        <a class = "navbar-brand" >Reserva en línea del hotel</a>
                    </div>
                    
                </div>
        </nav>
        <div class = "container-fluid">	
            <ul class = "nav nav-pills">
                <li><a href = "LOSANGELES_adminportal_cliente">Registro</a></li>				
            </ul>	
	    </div>
        <br />
        <div class = "container">
            <div class = "container-fluid">
            <div class = "panel-body">
                <form action='/LOSANGELES_cliente' id="login" method='post' style="color: rgb(1,1,1)">
                    @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class='alert alert-succes'>
                    {{ session('status')}}
                    </div>
                    @endif
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                    <div class = "panel-heading" style="padding-left: 150px">
                    <h4>REGISTRO CLIENTE</h4>
                    <br></br></br>
                    <label for="nombre">
                    Nombre:
                    </label>
                        <input type="text" id="nombre" name="nombre">
                    <br></br>
                    <label for="dni">
                    DNI:
                    </label>
                            <input type="text" id="dni" name="dni">
                    <br></br>
                    <label for="email">
                    E-mail:
                    </label>
                            <input type="email" id="email" name="email">
                    <br></br>
                    <label for="telefono">
                    Teléfono:
                    </label>
                            <input type="text" id="telefono" name="telefono">
                    <br></br>
                    <button type="submit"  href="LOSANGELES_reserva">
                    Ingresar
                    </button>
                    <br></br>
                    <div class="info"><a href="LOSANGELES_reserva" class="btn btn-default">Ir a Reserva</a></div>
                    </div>
                </form>
            </div>
            <br />
            <br />
        </div>
        </div>
        </body>
        
@endsection