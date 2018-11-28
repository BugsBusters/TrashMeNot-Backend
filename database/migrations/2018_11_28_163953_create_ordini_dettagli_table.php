<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOrdiniDettagliTable extends Migration {

	public function up()
	{
		Schema::create('ordini_dettagli', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('testata_id')->unsigned();
			$table->integer('prodotti_id')->unsigned();
			$table->integer('quantita');
			$table->decimal('prezzo_unitario');
		});
	}

	public function down()
	{
		Schema::drop('ordini_dettagli');
	}
}