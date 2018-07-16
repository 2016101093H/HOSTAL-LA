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
    <div class="container col-md-8 col-md-offset-2">
       <div class="well well bs-component">
          <div class="content">
             <h2 class="header">{!! $reserva->nombre !!}</h2>
             <p><strong>Status</strong>: {!! $reserva->status? 'Pendiente' : 'Respondido' !!}</p>
             <p>Tipo de Habitación: {!! $reserva->type !!}</p>
             <p>Cantidad de días: {!! $reserva->cant_dias !!}</p>
             <p>Cantidad de habs.: {!! $reserva->cant_hab !!}</p>
             <p>Inicio de la estadía: {!! $reserva->inicio !!}</p>
             <p>Slug: {!! $reserva->slug !!}</p>
             <p>Tipo de Pago: {!! $reserva->tipo_pago !!}</p>
             <p>Pago Total: {!! $reserva->total_pago !!}</p>
                </div>
                <a href="{!! action('Api\ReservaController@edit', $reserva->slug) !!}" class="btn btn-info pull-left">Editar</a>
                <form method="post" action="{!! action('Api\ReservaController@destroy', $reserva->slug) !!}" class="pull-left">
                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                 <div>
                   <button type="submit" class="btn btn-warning">Borrar</button>
                   </div>
                   </form>
                <div clear="clearfix">
                          </div>
                          </div>         
                          </div>

      </body>
      </html>   