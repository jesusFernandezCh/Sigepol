<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEntesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('entes', function(Blueprint $table)
		{
			$table->foreign('direccion', 'Refdirecciones230')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo', 'Refnomencladores229')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('entes', function(Blueprint $table)
		{
			$table->dropForeign('Refdirecciones230');
			$table->dropForeign('Refnomencladores229');
		});
	}

}
