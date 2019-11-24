<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToTelefonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('telefonos', function(Blueprint $table)
		{
			$table->foreign('proveedor_servicio', 'Refnomencladores257')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo', 'Refnomencladores52')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('telefonos', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores257');
			$table->dropForeign('Refnomencladores52');
		});
	}

}
