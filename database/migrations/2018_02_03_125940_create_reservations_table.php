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
            $table->timestamp('reservation_date');
            $table->string('seat_code');
            $table->string('depart_at');
            $table->string('price');
            $table->integer('user_id')->unsigned();
            $table->integer('costumer_id')->unsigned();
            
            

            $table->foreign('user_id')
                ->references('id')->on('users')
                ->onDelete('cascade');
            $table->foreign('costumer_id')
                ->references('id')->on('costumers')
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
