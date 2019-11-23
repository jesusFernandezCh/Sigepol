<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMinutasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('minutas', function(Blueprint $table)
		{
			$table->foreign('expediente', 'Expediente-Minuta')->references('id')->on('expedientes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('lugar_hecho', 'Refdirecciones77')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('direccion_despacho', 'Refdirecciones78')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('despacho', 'Refnomencladores231')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('movil', 'Refnomencladores60')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('delito', 'Refnomencladores61')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fiscalia', 'Refnomencladores63')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('fiscal', 'Refnomencladores64')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo_detencion', 'Refnomencladores65')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo_moneda', 'Refnomencladores68')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('resenna', 'Refresennas250')->references('id')->on('resennas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usuario', 'Refusers338')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('minutas', function(Blueprint $table)
		{
			$table->dropForeign('Expediente-Minuta');
			$table->dropForeign('Refdirecciones77');
			$table->dropForeign('Refdirecciones78');
			$table->dropForeign('Refnomencladores231');
			$table->dropForeign('Refnomencladores60');
			$table->dropForeign('Refnomencladores61');
			$table->dropForeign('Refnomencladores63');
			$table->dropForeign('Refnomencladores64');
			$table->dropForeign('Refnomencladores65');
			$table->dropForeign('Refnomencladores68');
			$table->dropForeign('Refresennas250');
			$table->dropForeign('Refusers338');
		});
	}

}
