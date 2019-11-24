<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDireccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('direcciones', function(Blueprint $table)
		{
			$table->foreign('estado', 'Refnomencladores118')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ciudad', 'Refnomencladores119')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('municipio', 'Refnomencladores120')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('parroquia', 'Refnomencladores121')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('cuadrante', 'Refnomencladores122')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('direcciones', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores118');
			$table->dropForeign('Refnomencladores119');
			$table->dropForeign('Refnomencladores120');
			$table->dropForeign('Refnomencladores121');
			$table->dropForeign('Refnomencladores122');
		});
	}

}
