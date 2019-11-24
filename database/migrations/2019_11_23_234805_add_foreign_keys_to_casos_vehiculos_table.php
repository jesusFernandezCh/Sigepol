<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_vehiculos', function(Blueprint $table)
		{
			$table->foreign('id_caso', 'Refcasos106')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('status', 'Refnomencladores160')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_vehiculo', 'Refvehiculos105')->references('id')->on('vehiculos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_vehiculos', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos106');
			$table->dropForeign('Refnomencladores160');
			$table->dropForeign('Refvehiculos105');
		});
	}

}
