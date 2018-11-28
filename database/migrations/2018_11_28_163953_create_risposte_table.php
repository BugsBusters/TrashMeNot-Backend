<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRisposteTable extends Migration {

	public function up()
	{
		Schema::create('risposte', function(Blueprint $table) {
			$table->increments('id');
			$table->string('risposta', 500);
			$table->boolean('esatto');
			$table->integer('domande_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('risposte');
	}
}