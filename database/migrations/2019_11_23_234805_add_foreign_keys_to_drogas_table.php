<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToDrogasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('drogas', function(Blueprint $table)
		{
			$table->foreign('tipo', 'Refnomencladores136')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('medida', 'Refnomencladores138')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('estado', 'Refnomencladores139')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('drogas', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores136');
			$table->dropForeign('Refnomencladores138');
			$table->dropForeign('Refnomencladores139');
		});
	}

}
