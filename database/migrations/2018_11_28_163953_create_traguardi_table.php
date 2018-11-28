<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTraguardiTable extends Migration {

	public function up()
	{
		Schema::create('traguardi', function(Blueprint $table) {
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('badge_id')->unsigned();
		});
	}

	public function down()
	{
		Schema::drop('traguardi');
	}
}