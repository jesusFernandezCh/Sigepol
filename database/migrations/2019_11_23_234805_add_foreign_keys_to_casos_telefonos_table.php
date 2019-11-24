<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosTelefonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_telefonos', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos134')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_telefono', 'Reftelefonos164')->references('id')->on('telefonos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_telefonos', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos134');
			$table->dropForeign('Reftelefonos164');
		});
	}

}
