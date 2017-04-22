@extends('layouts.front')

@section('content')
    <div>
        <section id="contenedor">
            <section id="contenedor_foto">

                <img src="imgs/hoteles_inicio.jpg" width=900px>
                <titulo>HOTELMANÍA</titulo>
                <br>
                <subtitulo>Reserva por horas</subtitulo>
                <foto_trans>
                    <img src="imgs/logo_hotel.jpg" class="img-rounded" width="250">
                </foto_trans>
            </section>

            <section id="contenedor_noticias">
                <section id="clases">
                    <p1>TRABAJA</p1>
                    <br>
                    <p2>-Habitaciones amplias</p2>
                    <br>
                    <p2>-Conexión a internet</p2>
                    <br>
                    <p2>-Escritorios grandes</p2>
                </section>

                <section id="campeonatos">
                    <p1>DESCANSA</p1>
                    <br>
                    <p2>-Camas confortables</p2>
                    <br>
                    <p2>-TV por satélite</p2>
                    <br>
                    <p2>-Servicio de habitaciones 24h</p2>
                </section>

                <section id="tienda">
                    <p1>DESCONECTA</p1>
                    <br>
                    <p2>-Gimnasio</p2>
                    <br>
                    <p2>-Piscina</p2>
                </section>
            </section>
        </section>
    </div>
@endsection