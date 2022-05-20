<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnnuncioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('annuncio', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->string('NOME_ANN', 30);
			$table->integer('LOCATORE')->index('locatore_fk');
			$table->string('TIPOLOGIA', 15);
			$table->date('INIZIO_DISP');
			$table->date('FINE_DISP');
			$table->text('DESCRIZIONE', 65535);
			$table->string('CITTA', 20);
			$table->string('CAP', 5);
			$table->string('VIA', 40);
			$table->string('CIVICO', 3);
			$table->float('AFFITTO', 10, 0);
			$table->integer('POSTI_LETTO')->nullable();
			$table->float('SUPERFICIE', 10, 0)->nullable();
			$table->integer('N_BAGNI')->nullable()->comment('0 SI 1 NO');
			$table->boolean('ZONA_COMUNE')->nullable()->comment('0 SI 1 NO');
			$table->boolean('ANGOLO_STUDIO')->nullable()->comment('0 SI 1 NO');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('annuncio');
	}

}
