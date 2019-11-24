<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMunicionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('municiones', function(Blueprint $table)
		{
			$table->foreign('marca', 'Refnomencladores186')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo', 'Refnomencladores187')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('municiones', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores186');
			$table->dropForeign('Refnomencladores187');
		});
	}

}
