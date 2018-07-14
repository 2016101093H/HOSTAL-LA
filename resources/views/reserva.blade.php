<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
		<script src="/js/majax.js"></script>
        
		

    </head>
    <body>
	<form action='/reserva' id="login" method='post'>
    @foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	    <legend>
		   Reserva
		   </legend>
		   <label for="type">
		   Tipo de Habitación:
		   </label>
		   		<select type="text" id="type" name="type">
				  
                    <option>Tipo Room</option>
                    <option>Dobles</option>
                    <option>Matrimoniales</option>
                    <option>Triples</option>
                    <option>Individuales</option>
                   
                    </select>
                    </div>  
					<label for="nombre">
		   Cliente:
		   </label>
		   		<select type="text" id="nombre" name="nombre">
				 
				   @foreach($clientes as $cliente)				  
                    <option value ="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
					@endforeach
                </select>
                    </div>  
		   <label for="inicio">
		   Fecha de Alojamiento:
		   </label>
		   		<input type="date" id="inicio" name="inicio">
		   <label for="tiempo">
		   Tiempo (DÍAS):
		   </label>
		   		<input type="text" id="cant_dias" name="cant_dias">
		 <label for="Habs.">
		   Cantidad de Hab.:
		   </label>
		   		<input type="number" id="cant_hab" name="cant_hab">
		   <button type="submit">
	       Ingresar
		   </button>
		   </form>
      </body>
      </html>     