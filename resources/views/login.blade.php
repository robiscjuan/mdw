@extends('layouts.front')

@section('content')

    <div class="container">
        <div class="row centered-form">
            <div class="col-xs-8 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Acceso. Usuario o Email </h3>
                    </div>
                    <div class="panel-body">

                        <form name="miformulario" method="get" action="" id="miformulario">
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="Text" name="id" id="id" class="form-control input-sm"
                                               placeholder="Usuario o email">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="password" name="password" id="password"
                                               class="form-control input-sm" placeholder="Password">
                                    </div>
                                </div>
                            </div>


                            <input type="button" value="Acceder" id="boton_login" class="btn btn-info btn-block"
                                   onclick="alert(data)">

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function () {

            $("#boton_login").click(function () {
                var id = $("#id").val();
                var password = $("#password").val();

                if (id == '' && password == '') {
                    $('input[id="id"],input[id="password"]').css("border", "2px solid red");
                    $('input[id="id"],input[id="password"]').css("box-shadow", "0 0 3px red");
                    alert("Por favor, rellene los campos!!!!!!");


                } else {
                    $.get("http://salonso.etsisi.upm.es/miw_serv/padel/conexion.php", {id: id, password: password},
                        function (data) {


                            if (data == '{"errorMessage":"no se ha recibido el id"}') {

                                $('input[id="id"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                                $('input[id="password"]').css({
                                    "border": "2px solid #00F5FF",
                                    "box-shadow": "0 0 5px #00F5FF"
                                });

                                alert("Introduzca el Usuario o Email !!!");


                            } else if (data == '{"errorMessage":"no se ha recibido el password"}') {

                                $('input[id="id"]').css({
                                    "border": "2px solid #00F5FF",
                                    "box-shadow": "0 0 3px #00F5FF"
                                });
                                $('input[id="password"]').css({"border": "2px solid red", "box-shadow": "0 0 5px red"});

                                alert("Introduzca el password !!!");


                            } else if (data == '{"errorMessage":"usuario no existente"}') {

                                $('input[id="id"],input[id="password"]').css({
                                    "border": "2px solid red",
                                    "box-shadow": "0 0 3px red"
                                });

                                alert("Usuario no existente !!!");
                                $("#miformulario")[0].reset();

                            } else { //exito

                                // id = fenw o fenw@etsisi.upm.es
                                //password = *fenw*

                                $('input[id="id"],input[id="password"]').css({
                                    "border": "2px solid #00F5FF",
                                    "box-shadow": "0 0 5px #00F5FF"
                                });

                                alert("BIENVENIDO " + ' "' + document.getElementById("id").value + '". ' + " Tu token es:  " + data.substring(10, 39));

                                $("#miformulario")[0].reset();

                            }
                        });
                }
            });
        });


    </script>
@endsection