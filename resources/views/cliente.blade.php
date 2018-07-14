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
	<form action='/LOSANGELES_cliente' id="login" method='post'>
    @foreach ($errors->all() as $error)
<p class="alert alert-danger">{{ $error }}</p>
@endforeach
<input type="hidden" name="_token" value="{!! csrf_token() !!}">
	    <legend>
		   Cliente
		   </legend>
		   <label for="nombre">
		   Nombre:
		   </label>
		   		<input type="text" id="nombre" name="nombre">
		   <label for="dni">
		   DNI:
		   </label>
		   		<input type="text" id="dni" name="dni">
		   <label for="email">
		   E-mail:
		   </label>
		   		<input type="email" id="email" name="email">
		 <label for="telefono">
		   Teelefono:
		   </label>
		   		<input type="text" id="telefono" name="telefono">
		   <button type="submit"  href="LOSANGELES_reserva">
	       Ingresar
			
		   </button>
		   
		
		   </form>
      </body>
      </html>     