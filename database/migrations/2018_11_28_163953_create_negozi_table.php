<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNegoziTable extends Migration {

	public function up()
	{
		Schema::create('negozi', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nome', 500);
			$table->integer('user_id');
			$table->integer('p_iva');
		});
	}

	public function down()
	{
		Schema::drop('negozi');
	}
}