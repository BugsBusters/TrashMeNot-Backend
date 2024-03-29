<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBlogTable extends Migration {

	public function up()
	{
		Schema::create('blog', function(Blueprint $table) {
			$table->increments('id');
			$table->string('titolo', 500);
			$table->text('descrizione', 50000);
		});
	}

	public function down()
	{
		Schema::drop('blog');
	}
}
