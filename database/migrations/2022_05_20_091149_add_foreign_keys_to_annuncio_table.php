<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAnnuncioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('annuncio', function(Blueprint $table)
		{
			$table->foreign('LOCATORE', 'locatore_fk')->references('ID')->on('utenti')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('annuncio', function(Blueprint $table)
		{
			$table->dropForeign('locatore_fk');
		});
	}

}
