<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonasJuridicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personas_juridicas', function(Blueprint $table)
		{
			$table->foreign('ubicacion', 'Refdirecciones165')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('email', 'Refemails275')->references('id')->on('emails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('condicion', 'Refnomencladores191')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('representante_legal', 'Refpersonas_naturales133')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personas_juridicas', function(Blueprint $table)
		{
			$table->dropForeign('Refdirecciones165');
			$table->dropForeign('Refemails275');
			$table->dropForeign('Refnomencladores191');
			$table->dropForeign('Refpersonas_naturales133');
		});
	}

}
