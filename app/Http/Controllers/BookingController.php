<?php

namespace App\Http\Controllers;

use App\Client;
use App\Room;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use League\Flysystem\Exception;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $client = Client::create($request->all());
            $room = Room::find(1);
            $data = [
                1 => ['room_id' => 1, 'client_id' => $client->id, 'start_hour' => $request->day . ' ' . $request->start_hour, 'finish_hour' => $request->day . ' ' . $request->finish_hour],
            ];
            $room->clients()->attach($data);
            return response(view('reservaOK'), 200);
        }catch (QueryException $e){
            return response(view('reservaKO'), 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
