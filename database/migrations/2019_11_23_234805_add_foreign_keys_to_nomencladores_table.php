<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToNomencladoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('nomencladores', function(Blueprint $table)
		{
			$table->foreign('nomenclador', 'Refnomencladores268')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('nomencladores', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores268');
		});
	}

}
