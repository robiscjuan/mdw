@extends('layouts.front')

@section('content')
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 70px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        body {
            background-color: #525252 !important;
        }

    </style>

    <div class="content">
        <h1 style="color: white">La reserva se ha completado correctamente con el identificador AER1233</h1>
    </div>
    <a href="{{route('home')}}">
        <div class="content"><h2>Volver a la home</h2></div>
    </a>
@endsection