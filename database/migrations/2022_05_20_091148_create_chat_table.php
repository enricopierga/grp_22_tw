<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChatTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('chat', function(Blueprint $table)
		{
			$table->integer('ID', true);
			$table->integer('ID_ANNUNCIO')->index('annuncio_fk');
			$table->integer('ID_MITTENTE')->index('mittente_fk');
			$table->integer('ID_DESTINATARIO')->index('destinatario_fk');
			$table->dateTime('DATAORAINVIO');
			$table->text('CONTENUTO', 16777215);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('chat');
	}

}
