<?php

use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'name' => 'Habitación 1',
            'tv' => 1,
            'internet' => 1,
            'air_conditioner' => 0,
            'jacuzzi' => 0,
            'minibar' => 1
        ]);
    }
}
