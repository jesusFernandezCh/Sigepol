<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosEntesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_entes', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos169')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ente', 'Refentes170')->references('id')->on('entes')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_entes', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos169');
			$table->dropForeign('Refentes170');
		});
	}

}
