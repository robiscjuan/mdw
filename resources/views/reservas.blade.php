@extends('layouts.front')

@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-8 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Reservas</h3>
                    </div>
                    <div class="panel-body">

                        <form name="reserva" method="post" action="/booking" id="reserva">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <h3>Datos del usuario:</h3>
                                        <p> Nombre:<input type="text" name="name" id="name" class="form-control input-sm"
                                                         placeholder="Nombre"></p>
                                        <p> Apellidos:<input type="text" name="last_name" id="last_name" class="form-control input-sm"
                                                         placeholder="Apellidos"></p>
                                        <p> Dirección:<input type="text" name="address" id="address" class="form-control input-sm"
                                                         placeholder="Dirección"></p>
                                        <p> Teléfono:<input type="number" name="phone_number" id="phone_number" class="form-control input-sm"
                                                         placeholder="Teléfono"></p>
                                        <p> Email:<input type="email" name="email" id="email" class="form-control input-sm"
                                                         placeholder="Email"></p>
                                        <h3>Datos de la reserva:</h3>
                                        <p> Fecha:<input type="date" name="day" id="day" class="form-control input-sm"
                                                         placeholder="Fecha"></p>
                                        <p> Hora inicio:
                                            <select name="start_hour" id="start_hour" class="form-control input-sm"
                                                    placeholder="hora_inicio">
                                                <option></option>
                                                <option>00:00</option>
                                                <option>01:00</option>
                                                <option>02:00</option>
                                                <option>03:00</option>
                                                <option>04:00</option>
                                                <option>05:00</option>
                                                <option>06:00</option>
                                                <option>07:00</option>
                                                <option>08:00</option>
                                                <option>09:00</option>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                                <option>19:00</option>
                                                <option>20:00</option>
                                                <option>21:00</option>
                                                <option>22:00</option>
                                                <option>23:00</option>
                                                
                                            </select>
                                        <p> Hora fin:
                                            <select name="finish_hour" id="finish_hour" class="form-control input-sm"
                                                    placeholder="hora_fin">
                                                <option></option>
                                                <option>00:00</option>
                                                <option>01:00</option>
                                                <option>02:00</option>
                                                <option>03:00</option>
                                                <option>04:00</option>
                                                <option>05:00</option>
                                                <option>06:00</option>
                                                <option>07:00</option>
                                                <option>08:00</option>
                                                <option>09:00</option>
                                                <option>10:00</option>
                                                <option>11:00</option>
                                                <option>12:00</option>
                                                <option>13:00</option>
                                                <option>14:00</option>
                                                <option>15:00</option>
                                                <option>16:00</option>
                                                <option>17:00</option>
                                                <option>18:00</option>
                                                <option>19:00</option>
                                                <option>20:00</option>
                                                <option>21:00</option>
                                                <option>22:00</option>
                                                <option>23:00</option>
                                                
                                            </select>
                                        <p> Habitación:
                                            <select name="habitacion" id="habitacion" class="form-control input-sm"
                                                    placeholder="habitacion">
                                                <option></option>
                                                <option>Individual</option>
                                                <option>Doble 1 cama</option>
                                                <option>Doble 2 camas</option>
                                                <option>Triple 3 camas</option>
                                            </select>
                                    </div>
                                </div>
                            </div>


                            <input type="submit" value="Reservar" id="boton_reservas" class="btn btn-info btn-block">


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection