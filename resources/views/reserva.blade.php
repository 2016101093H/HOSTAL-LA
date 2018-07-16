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
							if(formulario.type.value=='Dobles')
							var dias = parseInt(formulario.cant_dias.value);
							var hab = parseInt(formulario.cant_hab.value);
							formulario.total_pago.value=dias*hab*40;

							if(formulario.type.value=='Indivuduales')
							var dias = parseInt(formulario.cant_dias.value);
							var hab = parseInt(formulario.cant_hab.value);
							formulario.total_pago.value=dias*hab*30;

							if(formulario.type.value=='Matrimoniales')
							var dias = parseInt(formulario.cant_dias.value);
							var hab = parseInt(formulario.cant_hab.value);
							formulario.total_pago.value=dias*hab*60;

							if(formulario.type.value=='Triples')
							var dias = parseInt(formulario.cant_dias.value);
							var hab = parseInt(formulario.cant_hab.value);
							formulario.total_pago.value=dias*hab*50;
							}
							</script>

							<input type="hidden" name="_token" value="{!! csrf_token() !!}">
								<div class = "panel-heading">
									<h4>RESERVACIÓN</h4>
									<br></br>
									<label for="type">
									Tipo de Habitación:
									</label>
										<select type="text" id="type" name="type">
											<option>Seleccione</option>
											<option>Dobles</option>
											<option>Matrimoniales</option>
											<option>Triples</option>
											<option>Individuales</option>
										</select>
										<br>
									<label for="nombre">
									Cliente:
									</label>
										<select type="text" id="nombre" name="nombre">
											@foreach($clientes as $cliente)				  
											<option value ="{{$cliente->nombre}}">{{$cliente->nombre}}</option>
												@endforeach
										</select>
										<br>
									<label for="inicio">
									Fecha de Alojamiento:
									</label>
										<input type="date" id="inicio" name="inicio" style="color:#000">
										<br></br>	
									<label for="tiempo">
									Tiempo (DÍAS):
									</label>
										<input type="text" id="cant_dias" name="cant_dias" style="color:#000">
										<br></br>	
									<label for="Habs.">
									Cantidad de Hab.:
									</label>
										<input type="number" id="cant_hab" name="cant_hab" style="color:#000">
										<br></br>	
									<label for="type">
									Tipo de Pago:
									</label>
										<select type="text" id="tipo_pago" name="tipo_pago" style="color:#000">
											<option>Seleccione</option>
											<option>Contado</option>
											<option>Visa</option>
										</select>
										<br>
									<label for="Habs.">
									Total pago:
									</label>
										<input type="text" id="total_pago" name="total_pago">
										<br></br>
										<input type="button" value="CALCULAR" onclick="varios()">
										<br></br>	
										<button type="submit" style="text-align:center">Ingresar</button>
								</div>
						</form>
					</div>
				</div>
			</div>
		</div>
</div>
@endsection