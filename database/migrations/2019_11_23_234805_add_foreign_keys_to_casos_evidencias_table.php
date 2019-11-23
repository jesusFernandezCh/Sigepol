<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosEvidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_evidencias', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos141')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('evidencia', 'Refevidencias142')->references('id')->on('evidencias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_evidencias', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos141');
			$table->dropForeign('Refevidencias142');
		});
	}

}
