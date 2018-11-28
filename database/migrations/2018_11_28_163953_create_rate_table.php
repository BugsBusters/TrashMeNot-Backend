<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRateTable extends Migration {

	public function up()
	{
		Schema::create('rate', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('rate');
			$table->integer('prodotti_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('rate');
	}
}