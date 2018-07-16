@extends('plantilla')
@section('contenido')
<div class = "container">
    <br/>
        <div class = "col-md-4"></div>
            <div class = "col-md-4">
                <div class = "panel panel-danger">
                    <div class = "panel-body">
						<form action='/LOSANGELES_reserva' id="login" method='post' name="formulario" style="color: rgb(1,1,1); text-align:center">
							@foreach ($errors->all() as $error)
							<p class="alert alert-danger">{{ $error }}</p>
							@endforeach

							@if (session('status'))
							<div class='alert alert-succes'>
							{{ session('status')}}
							</div>
							@endif
							<script>

function varios(){
<!-- Multiplicacion -->
     if(formulario.type.value=='Dobles'){
	var dias1 = parseInt(formulario.cant_dias.value);
	 var hab1 = parseInt(formulario.cant_hab.value);
	formulario.total_pago.value=dias1*hab1*40;};
	 if(formulario.type.value=='Individuales'){
	var dias2 = parseInt(formulario.cant_dias.value);
	var hab2 = parseInt(formulario.cant_hab.value);
	formulario.total_pago.value=dias2*hab2*30;};
	if(formulario.type.value=='Matrimoniales'){
	var dias3 = parseInt(formulario.cant_dias.value);
	var hab3 = parseInt(formulario.cant_hab.value);
	formulario.total_pago.value=dias3*hab3*60;};
	if(formulario.type.value=='Triples'){
	var dias0 = parseInt(formulario.cant_dias.value);
	var hab0 = parseInt(formulario.cant_hab.value);
	formulario.total_pago.value=dias0*hab0*50;};
	}

</script>

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
		   		<input type="number" id="cant_dias" name="cant_dias">
		 <label for="Habs.">
		   Cantidad de Hab.:
		   </label>
		   		<input type="number" id="cant_hab" name="cant_hab">
				   <label for="type">
		   Tipo de Pago:
		   </label>
		   		<select type="text" id="tipo_pago" name="tipo_pago">
				  
                    <option>Tipo Pago</option>
                    <option>Contado</option>
                    <option>Visa</option>
                    </select>
                    </div>
					<label for="Habs.">
		   Total pago:
		   </label>
		   		<input type="text" id="total_pago" name="total_pago">
				   <input type="button" value="CALCULAR" onclick="varios()">		
		
		   <button type="submit">
	       Ingresar
		   </button>
		   </form>
      </body>
      </html>     
