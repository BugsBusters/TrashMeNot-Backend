<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('risposte', function(Blueprint $table) {
			$table->foreign('domande_id')->references('id')->on('domande')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('prodotti', function(Blueprint $table) {
			$table->foreign('categorie_id')->references('id')->on('categorie')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('rate', function(Blueprint $table) {
			$table->foreign('prodotti_id')->references('id')->on('prodotti')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('traguardi', function(Blueprint $table) {
			$table->foreign('badge_id')->references('id')->on('badge')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ordini_dettagli', function(Blueprint $table) {
			$table->foreign('testata_id')->references('id')->on('ordini_testata')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
		Schema::table('ordini_dettagli', function(Blueprint $table) {
			$table->foreign('prodotti_id')->references('id')->on('prodotti')
						->onDelete('cascade')
						->onUpdate('cascade');
		});
	}

	public function down()
	{
		Schema::table('risposte', function(Blueprint $table) {
			$table->dropForeign('risposte_domande_id_foreign');
		});
		Schema::table('prodotti', function(Blueprint $table) {
			$table->dropForeign('prodotti_categorie_id_foreign');
		});
		Schema::table('rate', function(Blueprint $table) {
			$table->dropForeign('rate_prodotti_id_foreign');
		});
		Schema::table('traguardi', function(Blueprint $table) {
			$table->dropForeign('traguardi_badge_id_foreign');
		});
		Schema::table('ordini_dettagli', function(Blueprint $table) {
			$table->dropForeign('ordini_dettagli_testata_id_foreign');
		});
		Schema::table('ordini_dettagli', function(Blueprint $table) {
			$table->dropForeign('ordini_dettagli_prodotti_id_foreign');
		});
	}
}