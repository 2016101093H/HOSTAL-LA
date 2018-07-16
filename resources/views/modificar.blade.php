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
     <div class="panel panel-default">
          <div class="panel-heading">
          <h2>Reservas</h2>
          </div>
          @if (session('status'))
          <div class="alert alert-success">
          {{ session('status')}}
          </div>
          @endif
          @if ($reservas->isEmpty())
        <p>No hay reservas</p>
        @else
        <table class="table">
            <thead>
              <tr>
                <th>Id Reserva</th>
                
                </tr>
                </thead>
                <tbody>
                    @foreach( $reservas as $reserva)
                        <tr>
                          <td>{!! $reserva->id !!}</td>
                        <td>
                        <a href="{!! action('Api\ReservaController@show', $reserva->slug) !!}">{!! $reserva->nombre !!}</a>
                        </td>
                        <td>{!! $reserva->status ? 'Pendiente' : 'Respondido' !!}</td>
                          </tr>
                          @endforeach
                          </tbody>
                          </table>
                          @endif
                          </div>
                          </div>
   

      </body>
      </html>   