<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset="utf-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Proyecto agil</title>
    <link href="/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <link href="/css/estilos.css" rel="stylesheet">
    {{--<link rel="stylesheet" href="/code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">--}}
    {{--<link rel="stylesheet" href="/resources/demos/style.css">--}}
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <style>
        body {
            padding-top: 100px;
            padding-left: 0px;
            padding-right: 0px;
        }
    </style>
    <script type="text/javascript" src="http://code.jquery.com/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script>

        $(document).ready(function () {

            $("#contenido").load("vistas/inicio.html");

            $('#inicio').click(function () {
                $("#contenido").load("vistas/inicio.html");
            });
            $('#instalaciones').click(function () {
                $("#contenido").load("vistas/instalaciones.html");
            });
            $('#reservas').click(function () {
                $("#contenido").load("vistas/reservas.html");
            });
            $('#login').click(function () {
                $("#contenido").load("vistas/login.html");
            });
            $('#registro').click(function () {
                $("#contenido").load("vistas/registro.html");
            });
        });
    </script>

</head>

<body>


<header>
    <nav class="navbar navbar-default navbar-fixed-top " role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="navegacion-fm">
                    <span class="sr-only">Menu</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{route('home')}}" class="navbar-brand">HotelManía</a>
                <img alt="Brand" src="/imgs/logo_hotel.jpg" width="50px" height="50px">
            </div>

            <!-- Inicia Menú-->
            <div class="collapse navbar-collapse" id="navegacion-fm">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}" id="inicio">Inicio</a></li>
                    <li><a href="{{route('instalaciones')}}" id="instalaciones"><span
                                    class="glyphicon glyphicon-map-marker"></span>
                            Instalaciones<span class="sr-only">(current)</span></a></li>
                    <li><a href="{{route('loginCliente')}}" id="reservas">Reservas</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="{{route('registro')}}" id="registro"> <span
                                    class="glyphicon glyphicon-user"> Registro </span></a></li>
                    <li><a href="{{route('loginCliente')}}" id="login"> <span
                                    class="glyphicon glyphicon-log-in"> Login </span></a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="contenido"></div>

</header>
@yield('content')
<footer>
</footer>

</body>
</html>