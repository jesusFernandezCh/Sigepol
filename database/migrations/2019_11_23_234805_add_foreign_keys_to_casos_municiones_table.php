<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosMunicionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_municiones', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos189')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('municion', 'Refmuniciones190')->references('id')->on('municiones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_municiones', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos189');
			$table->dropForeign('Refmuniciones190');
		});
	}

}
