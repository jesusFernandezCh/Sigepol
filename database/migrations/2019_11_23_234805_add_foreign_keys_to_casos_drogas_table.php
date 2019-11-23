<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosDrogasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_drogas', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos117')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('droga', 'Refdrogas116')->references('id')->on('drogas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_drogas', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos117');
			$table->dropForeign('Refdrogas116');
		});
	}

}
