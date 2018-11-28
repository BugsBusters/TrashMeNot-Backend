<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIndirizzi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('indirizzi', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stato');
            $table->string('regione');
            $table->string('citta');
            $table->string('cap');
            $table->string('via');
            $table->unsignedInteger('numero');
            $table->unsignedInteger('negozi_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('indirizzi');
    }
}
