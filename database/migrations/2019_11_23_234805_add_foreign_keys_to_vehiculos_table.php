<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('vehiculos', function(Blueprint $table)
		{
			$table->foreign('uso', 'Refnomencladores232')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo', 'Refnomencladores80')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('clase', 'Refnomencladores81')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('marca', 'Refnomencladores82')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('modelo', 'Refnomencladores83')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('color_arriba', 'Refnomencladores84')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('color_abajo', 'Refnomencladores85')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('propietario', 'Refpersonas_naturales260')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('vehiculos', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores232');
			$table->dropForeign('Refnomencladores80');
			$table->dropForeign('Refnomencladores81');
			$table->dropForeign('Refnomencladores82');
			$table->dropForeign('Refnomencladores83');
			$table->dropForeign('Refnomencladores84');
			$table->dropForeign('Refnomencladores85');
			$table->dropForeign('Refpersonas_naturales260');
		});
	}

}
