<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOccisosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('occisos', function(Blueprint $table)
		{
			$table->foreign('lugar_muerte', 'Refdirecciones145')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo_muerte', 'Refnomencladores144')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('motivo_muerte', 'Refnomencladores146')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('condicion', 'Refnomencladores161')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_persona', 'Refpersonas_naturales143')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('occisos', function(Blueprint $table)
		{
			$table->dropForeign('Refdirecciones145');
			$table->dropForeign('Refnomencladores144');
			$table->dropForeign('Refnomencladores146');
			$table->dropForeign('Refnomencladores161');
			$table->dropForeign('Refpersonas_naturales143');
		});
	}

}
