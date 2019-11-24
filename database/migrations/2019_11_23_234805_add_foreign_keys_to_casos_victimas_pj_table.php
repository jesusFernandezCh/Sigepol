<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosVictimasPjTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_victimas_pj', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos131')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('persona_juridica', 'Refpersonas_juridicas132')->references('id')->on('personas_juridicas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_victimas_pj', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos131');
			$table->dropForeign('Refpersonas_juridicas132');
		});
	}

}
