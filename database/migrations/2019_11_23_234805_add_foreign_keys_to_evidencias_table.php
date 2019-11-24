<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToEvidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('evidencias', function(Blueprint $table)
		{
			$table->foreign('tipo', 'Refnomencladores140')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('evidencias', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores140');
		});
	}

}
