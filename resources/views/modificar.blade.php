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
          @if ($reservas->isEmpty())
        <p>No hay reservas</p>
        @else
        <table class="table">
            <thead>
              <tr>
                <th>Id Reserva</th>
                <th>Nombre Cliente</th>
                <th>Inicio de la fecha de Hospedaje</th>
                <th>Cantidad de días</th>
                <th>Tipo de Habitación</th>
                <th>Cantidad de Habitaciones</th>
                <th>Tipo de Pago</th>
                <th>Total Pago</th>
                <th>Status</th>
                </tr>
                </thead>
                <tbody>
                    @foreach( $reservas as $reserva)
                        <tr>
                          <td>{!! $reserva->id !!}</td>
                          <td>{!! $reserva->nombre !!}</td>
                          <td>{!! $reserva->inicio !!}</td>
                          <td>{!! $reserva->cant_dias !!}</td>
                          <td>{!! $reserva->type !!}</td>
                          <td>{!! $reserva->cant_hab !!}</td>
                          <td>{!! $reserva->tipo_pago !!}</td>
                          <td>{!! $reserva->total_pago !!}</td>
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