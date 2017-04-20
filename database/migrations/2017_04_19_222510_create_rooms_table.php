<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoomsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->boolean('tv')->default(0);
            $table->boolean('internet')->default(0);
            $table->boolean('air_conditioner')->default(0);
            $table->boolean('jacuzzi')->default(0);
            $table->boolean('minibar')->default(0);
            $table->timestamps();
            //TODO Relacionar con tipo habitación
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rooms');
    }
}
