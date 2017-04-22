@extends('layouts.front')

@section('content')
    <div>
        <div class="container">
            <div class="row centered-form">
                <div class="col-xs-12 col-sm-12 col-md-8 col-sm-offset-0 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Bienvenido! Por Favor Registrese
                                <small>It's free!</small>
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form name="miformulario" method="get" action="" id="miformulario">
                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <p>&nbsp;<input type="text" name="username" id="username"
                                                            class="form-control input-sm" placeholder="Usuario"></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <p>Fecha de nacimiento:<input type="date" name="birthDate" id="birthDate"
                                                                          class="form-control input-sm"
                                                                          placeholder="Fecha de nacimiento"></p>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm"
                                           placeholder="Email">
                                </div>

                                <div class="row">
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password" id="password"
                                                   class="form-control input-sm" placeholder="Password">
                                        </div>
                                    </div>
                                    <div class="col-xs-6 col-sm-6 col-md-6">
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation"
                                                   id="password_confirmation" class="form-control input-sm"
                                                   placeholder="Confirme Password">
                                        </div>
                                    </div>
                                </div>

                                <input type="button" value="Registro" id="boton_registro" class="btn btn-info btn-block"
                                       onclick="alert(data)">

                            </form>
                        </div>
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

            $("#boton_registro").click(function () {
                var username = $("#username").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var password_confirmation = $("#password_confirmation").val();

                var fecha = $("#birthDate").val();
                var anio = fecha.substring(0, 4);
                var mes = fecha.substring(5, 7);
                var dia = fecha.substring(8, 10);
                var birthDate = Date.UTC(anio, mes - 1, dia);

                if (username == '' && email == '' && password == '' && password_confirmation == '') {
                    $('input[id="username"], input[id="email"], input[id="password"], input[id="password_confirmation"]').css("border", "2px solid red");
                    $('input[id="username"], input[id="email"], input[id="password"], input[id="password_confirmation"]').css("box-shadow", "0 0 3px red");
                    alert("Por favor, rellene los campos en rojo!!!!!!");
                } else if (username == '') {
                    $('input[id="username"]').css("border", "2px solid red");
                    $('input[id="username"]').css("box-shadow", "0 0 3px red");
                    alert("Por favor, rellene el nombre de Usuario!!!!!!");
                } else if (email == '') {
                    $('input[id="email"]').css("border", "2px solid red");
                    $('input[id="email"]').css("box-shadow", "0 0 3px red");
                    alert("Por favor, rellene el correo electrónico!!!!!!");
                } else if (password == '') {
                    $('input[id="password"]').css("border", "2px solid red");
                    $('input[id="password"]').css("box-shadow", "0 0 3px red");
                    alert("Por favor, introduzca una contraseña!!!!!!");
                } else if (password_confirmation == '') {
                    $('input[id="password_confirmation"]').css("border", "2px solid red");
                    $('input[id="password_confirmation"]').css("box-shadow", "0 0 3px red");
                    //location.reload();
                    alert("Por favor, repita la contraseña!!!!!!");

                } else {
                    //$.get("http://salonso.etsisi.upm.es/miw_serv/padel/username.php",{ username: username},
                    function (data) {


                        if (data == '{"errorMessage":"no error"}') {
                            $('input[id="username"]').css({
                                "border": "2px solid #00F5FF",
                                "box-shadow": "0 0 5px #00F5FF"
                            });


                        } else {

                            $('input[username="username"]').css({
                                "border": "2px solid red",
                                "box-shadow": "0 0 3px red"
                            });
                            alert("Ya existe ese usuario !!!");


                        }
                    }

                );

            //$.get("http://salonso.etsisi.upm.es/miw_serv/padel/email.php",{ email: email},
            function (data) {

                if (data == '{"errorMessage":"no error"}') {
                    $('input[id="email"]').css({"border": "2px solid #00F5FF", "box-shadow": "0 0 5px #00F5FF"});

                } else {

                    $('input[email="email"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                    alert("Ya existe ese correo electrónico !!!");

                }
            }

            );

        $.get("http://salonso.etsisi.upm.es/miw_serv/padel/usuario.php", {
                username: username,
                birthDate: birthDate,
                email: email,
                password: password
            },
            function (data) {

                if (data == '{"errorMessage":"Usuario o email ya existente"}') {

                    $('input[email="email"]').css({"border": "2px solid red", "box-shadow": "0 0 3px red"});
                    alert("ERROR: YA EXISTE EL USUARIO, intente con otro nombre y email ");

                    $("#miformulario")[0].reset();

                } else if (data == '{"errorMessage":"no error: usuario registrado"}') {
                    $('input[id="username"], input[id="email"], input[id="password"], input[id="password_confirmation"]').css({
                        "border": "2px solid #00F5FF",
                        "box-shadow": "0 0 5px #00F5FF"
                    });

                    alert("USUARIO REGISTRADO");
                    alert("BIENVENIDO " + document.getElementById("username").value);


                    $("#miformulario")[0].reset();

                } else { //error inesperado

                    alert("ERROR NO ESPERADO");

                }
            });

        }
        })
        ;
        })
        ;
        //Nombre de usuario:
    </script>
@endsection