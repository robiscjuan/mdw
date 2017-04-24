@extends('layouts.front')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Reservas</div>

                    <div class="panel-body">
                        <table>
                            <thead>
                            <tr>
                                <td>Nombre</td>
                                <td>Apellido</td>
                                <td>Dirección</td>
                                <td>Teléfono</td>
                                <td>Email</td>
                                <td>Hora inicio</td>
                                <td>Hora fin</td>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($room->clients as $client)
                                <tr>
                                    <td>{{$client->name}}</td>
                                    <td>{{$client->last_name}}</td>
                                    <td>{{$client->address}}</td>
                                    <td>{{$client->phone_number}}</td>
                                    <td>{{$client->email}}</td>
                                    <td>{{$client->pivot->start_hour}}</td>
                                    <td>{{$client->pivot->finish_hour}}</td>
                                </tr>
                                <hr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
