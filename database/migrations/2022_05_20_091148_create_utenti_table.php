<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUtentiTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('utenti', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('USERNAME', 15);
			$table->integer('RUOLO')->comment('0 locatore
1 locatario
2 admin');
			$table->string('NOME', 30);
			$table->string('COGNOME', 30);
			$table->string('GENERE', 1)->comment('M maschio
F femmina
 
');
			$table->integer('ETA');
			$table->string('EMAIL', 30);
			$table->string('PASSWORD', 15)->comment('max 15 caratteri');
			$table->string('CELLULARE', 20);
			$table->string('FOTO', 100);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('utenti');
	}

}
