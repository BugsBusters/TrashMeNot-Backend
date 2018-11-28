<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdiniTestataTable extends Migration {

	public function up()
	{
		Schema::create('ordini_testata', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('cliente_id');
			$table->integer('venditore_id');
			$table->decimal('totale');
			$table->integer('sconto');
			$table->date('data');
		});
	}

	public function down()
	{
		Schema::drop('ordini_testata');
	}
}