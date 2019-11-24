<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosArmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_armas', function(Blueprint $table)
		{
			$table->foreign('arma', 'Refarmas127')->references('id')->on('armas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('caso', 'Refcasos128')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_armas', function(Blueprint $table)
		{
			$table->dropForeign('Refarmas127');
			$table->dropForeign('Refcasos128');
		});
	}

}
