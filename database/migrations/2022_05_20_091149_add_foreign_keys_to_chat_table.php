<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToChatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('chat', function(Blueprint $table)
		{
			$table->foreign('ID_ANNUNCIO', 'annuncio_fk')->references('ID')->on('annuncio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_DESTINATARIO', 'destinatario_fk')->references('ID')->on('utenti')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ID_MITTENTE', 'mittente_fk')->references('ID')->on('utenti')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('chat', function(Blueprint $table)
		{
			$table->dropForeign('annuncio_fk');
			$table->dropForeign('destinatario_fk');
			$table->dropForeign('mittente_fk');
		});
	}

}
