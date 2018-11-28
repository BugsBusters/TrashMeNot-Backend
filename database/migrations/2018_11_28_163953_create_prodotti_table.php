<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProdottiTable extends Migration {

	public function up()
	{
		Schema::create('prodotti', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('quantita');
			$table->decimal('prezzo');
			$table->string('descrizione', 500);
			$table->integer('categorie_id')->unsigned();
			$table->integer('commerciante_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('prodotti');
	}
}