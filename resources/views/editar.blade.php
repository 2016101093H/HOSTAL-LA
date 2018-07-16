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
    <form class="form-horizontal" method="post">
       @foreach ($errors->all() as $error)
             <p class="alert alert-danger">{{ $error }}</p>
             @endforeach
              
           @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
            @endif
            <input type="hidden" name="_token" value="{!! csrf_token() !!}">   
        
        <fieldset> 
           <legend>Editar Reserva</legend>
             <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">Nombre del Cliente</label>
                <div class="col-lg--10">
                   <input type="text" class="form-control" id="nombre" name="nombre" value="{!! $reserva->nombre !!}">
                   </div>
                   </div>
             <div class="form-group">
                <label for="nombre" class="col-lg-2 control-label">Contenido</label>
                <div class="col-lg--10">
                   <textarea class="form-control" rows="10" id="content" name="nombre">{!! $reserva->nombre !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="type">{!! $reserva->type !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="cant_dias">{!! $reserva->cant_dias !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="cant_hab">{!! $reserva->cant_hab !!}</textarea>

                   <textarea class="form-control" rows="10" id="content" name="inicio">{!! $reserva->inicio !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="tipo_pago">{!! $reserva->tipo_pago !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="total_pago">{!! $reserva->total_pago !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="slug">{!! $reserva->slug !!}</textarea>
                   <textarea class="form-control" rows="10" id="content" name="status">{!! $reserva->status !!}</textarea>

                 </div>
                   </div>

                 <div class="form-group">
                <label>
                <input type="checkbox" name="status" {!! $reserva->status?"":"checked"!!}>¿Cerrar esta reserva?
                </label>
                   </div> 
                
                
                   <div class="form-group">
                
                <div class="col-lg--10">
                <button class="btn btn-default">Cancelar</button>
                <button type="submit" class="btn btn-primary">Actualizar</button>

                 </div>
                   </div>
                    </fieldset>
       
   
                          </form>
                          </div>
      </body>
      </html>   