<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('reservation_code');
            $table->string('reservation_at');
            $table->string('reservation_date');
            $table->string('seat_code');
            $table->string('depart_at');
            $table->string('price');
            $table->integer('costumer_id')->unsigned();
            $table->integer('rute_id')->unsigned();
            $table->timestamps();

            $table->foreign('costumer_id')
                ->references('id')->on('costumers')
                ->onDelete('cascade');
            $table->foreign('rute_id')
                ->references('id')->on('rutes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
