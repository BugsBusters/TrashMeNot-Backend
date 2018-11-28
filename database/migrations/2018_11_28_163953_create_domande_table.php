<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDomandeTable extends Migration {

	public function up()
	{
		Schema::create('domande', function(Blueprint $table) {
			$table->increments('id');
			$table->string('domanda', 500);
			$table->integer('livello');
		});
	}

	public function down()
	{
		Schema::drop('domande');
	}
}