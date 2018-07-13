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
		   Tipo:
		   </label>
		   <input type="text" id="type" name="type">
		   <label for="inicio">
		   Inicio:
		   </label>
		   <input type="date" id="inicio" name="inicio">
           
		   <button type="submit">
	       Ingresar
		   </button>
		   </form>
      </body>
      </html>     