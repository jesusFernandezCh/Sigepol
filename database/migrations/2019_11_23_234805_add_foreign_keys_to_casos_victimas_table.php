<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosVictimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_victimas', function(Blueprint $table)
		{
			$table->foreign('id_caso', 'Refcasos110')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('lugar_cautiverio', 'Refdirecciones223')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('status_victima', 'Refnomencladores221')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_persona', 'Refpersonas_naturales220')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_victimas', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos110');
			$table->dropForeign('Refdirecciones223');
			$table->dropForeign('Refnomencladores221');
			$table->dropForeign('Refpersonas_naturales220');
		});
	}

}
