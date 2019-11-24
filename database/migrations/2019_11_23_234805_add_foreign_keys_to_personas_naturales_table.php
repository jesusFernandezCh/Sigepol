<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonasNaturalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personas_naturales', function(Blueprint $table)
		{
			$table->foreign('email', 'Refemails273')->references('id')->on('emails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('medida', 'Refnomencladores194')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('profesion_oficio', 'Refnomencladores270')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('gentilicio', 'Refnomencladores43')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('talla', 'Refnomencladores47')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('raza', 'Refnomencladores48')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('contextura', 'Refnomencladores49')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('nivel_instruccion', 'Refnomencladores50')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personas_naturales', function(Blueprint $table)
		{
			$table->dropForeign('Refemails273');
			$table->dropForeign('Refnomencladores194');
			$table->dropForeign('Refnomencladores270');
			$table->dropForeign('Refnomencladores43');
			$table->dropForeign('Refnomencladores47');
			$table->dropForeign('Refnomencladores48');
			$table->dropForeign('Refnomencladores49');
			$table->dropForeign('Refnomencladores50');
		});
	}

}
