<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosVictimariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_victimarios', function(Blueprint $table)
		{
			$table->foreign('id_caso', 'Refcasos114')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('lugar_aprehencion', 'Refdirecciones216')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('estado_salud', 'Refnomencladores218')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo_lesion', 'Refnomencladores219')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_persona', 'Refpersonas_naturales215')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_victimarios', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos114');
			$table->dropForeign('Refdirecciones216');
			$table->dropForeign('Refnomencladores218');
			$table->dropForeign('Refnomencladores219');
			$table->dropForeign('Refpersonas_naturales215');
		});
	}

}
