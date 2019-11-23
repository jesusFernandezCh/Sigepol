<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasosEvidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casos_evidencias', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('caso')->nullable()->default(0);
			$table->integer('evidencia')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('casos_evidencias');
	}

}
