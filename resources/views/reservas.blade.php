@extends('layouts.front')

@section('content')

<script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<link rel="stylesheet" href="/resources/demos/style.css">
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

                        <form name="miformulario" method="get" action="" id="miformulario">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">

                                        <p> Hotel:
                                            <select name="hotel" id="hotel" class="form-control input-sm"
                                                    placeholder="Hotel">
                                                <option></option>
                                                <option>Hotel 1</option>
                                                <option>Hotel 2</option>
                                                <option>Hotel 3</option>
                                            </select>
                                        </p>

                                        <p> Fecha:<input type="date" name="day" id="day" class="form-control input-sm"
                                                         placeholder="Fecha"></p>
                                        <p> Hora inicio:
                                            <select name="hora_inicio" id="hora_inicio" class="form-control input-sm"
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
                                            <select name="hora_fin" id="hora_fin" class="form-control input-sm"
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


                            <input type="button" value="Reservar" id="boton_reservas" class="btn btn-info btn-block"
                                   onclick="alert(data)">


                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>

/*
        $(document).ready(function () {

            $("#boton_reservas").click(function () {
                var fecha = $("#day").val();
                var anio = fecha.substring(0, 4);
                var mes = fecha.substring(5, 7);
                var dia = fecha.substring(8, 10);
                //alert(day.substring(0,4));
                //alert(day.substring(5,7));
                //alert(day.substring(8,10));

                var day = Date.UTC(anio, mes - 1, dia);

                var hoy = Date.now();

                alert("fecha hoy : " + hoy);


                alert("fecha  de reserva en milisegundos: " + day);

                if (day < hoy) {
                    $('input[id="day"]').css("border", "2px solid red");
                    $('input[id="day"]').css("box-shadow", "0 0 3px red");
                    alert("La fecha de reserva debe ser superior a la fecha actual");


                } else {
                    $.get("http://salonso.etsisi.upm.es/miw_serv/padel/disponibilidad.php", {day: day},
                        function jsonParse(data) {

                            var horario = JSON.parse(data);
                            var salida = "";
                            //for(var i = 0; i < horario.length; i++ ){
                            for (i in horario) {

                                salida += 'PISTA:  ' + horario[i].courtId + ' --- HORA:  ' + horario[i].date + '\n';
                            }
                            alert(salida);


                        });
                }
            });
        });

*/
    </script>
@endsection