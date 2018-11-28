<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBadgeTable extends Migration {

	public function up()
	{
		Schema::create('badge', function(Blueprint $table) {
			$table->increments('id');
			$table->string('foto', 500);
			$table->string('testo', 500);
			$table->integer('punti');
		});
	}

	public function down()
	{
		Schema::drop('badge');
	}
}