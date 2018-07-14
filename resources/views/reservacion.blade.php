@extends('plantilla')
@section('contenido')
<div class="col-sm-5 col-md-4">
        <h3 style="color: #fff">RESERVACIONES</h3>
            <form role="form" class="wowload fadeInRight">
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Apellidos">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control"  placeholder="Nombres">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control"  placeholder="Correo Electrónico" maxlength=40>
                </div>
                <div class="form-group">
                    <input type="Phone" class="form-control"  placeholder="Celular" maxlength=9>
                </div>        
                <div class="form-group">
                    <div class="row">
                    <div class="col-xs-6">
                    <select class="form-control">
                    <option>No. de Habitaciones</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    </div>        
                    <div class="col-xs-6">
                    <select class="form-control">
                    <option>No. de Adultos</option>
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    </select>
                    </div></div>
                </div>
                <div class="form-group">
                    <div class="row">
                    <div class="col-xs-4">
                    <select class="form-control col-sm-2" name="expiry-month" id="expiry-month" width=20px>
                        <option>Cant. Dias</option>
                        <option value="01">01</option>
                        <option value="02">02</option>
                        <option value="03">03</option>
                        <option value="04">04</option>
                        <option value="05">05</option>
                        <option value="06">06</option>
                        <option value="07">07</option>
                        <option value="08">08</option>
                        <option value="09">09</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>

                    </select>
                    </div>
                    <div class="col-xs-4">
                    <select class="form-control col-sm-2" name="expiry-month" id="expiry-month">
                        <option>Mes</option>
                        <option value="01">Jan (01)</option>
                        <option value="02">Feb (02)</option>
                        <option value="03">Mar (03)</option>
                        <option value="04">Apr (04)</option>
                        <option value="05">May (05)</option>
                        <option value="06">June (06)</option>
                        <option value="07">July (07)</option>
                        <option value="08">Aug (08)</option>
                        <option value="09">Sep (09)</option>
                        <option value="10">Oct (10)</option>
                        <option value="11">Nov (11)</option>
                        <option value="12">Dec (12)</option>
                    </select>
                    </div>
                    <div class="col-xs-4">
                    <select class="form-control" name="expiry-year">
                        <option>Año</option>
                        <option value="18">2018</option>
                        <option value="19">2019</option>
                        <option value="20">2020</option>
                        <option value="21">2021</option>
                        <option value="22">2022</option>
                        <option value="23">2023</option>
                    </select>
                    </div>
                </div>
                </div>
                <div class="form-group">
                    <textarea class="form-control"  placeholder="Escriba su mensaje" rows="4"></textarea>
                </div>
                <button class="btn btn-default">REGISTRAR RESERVACIÓN</button>
            </form>    
        </div>
        </div>  
        </div>
        </div>
        <!-- reservation-information -->
@endsection