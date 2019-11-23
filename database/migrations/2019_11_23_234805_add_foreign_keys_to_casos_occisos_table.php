<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosOccisosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_occisos', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos163')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('occiso', 'Refoccisos162')->references('id')->on('occisos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_occisos', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos163');
			$table->dropForeign('Refoccisos162');
		});
	}

}
