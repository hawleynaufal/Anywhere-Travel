<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRutesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rutes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('depart_at');
            $table->string('rute_from');
            $table->string('rute_to');
            $table->string('price');
            $table->integer('transportation_id')->unsigned();
            $table->timestamps();
            $table->foreign('transportation_id')
                ->references('id')->on('transportations')
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
        Schema::dropIfExists('rutes');
    }
}
