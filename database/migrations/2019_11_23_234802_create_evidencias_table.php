<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEvidenciasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('evidencias', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tipo')->nullable()->default(0);
			$table->string('descipcion')->nullable();
			$table->string('fotografia');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('evidencias');
	}

}
