<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMunicionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('municiones', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('observacion')->nullable();
			$table->integer('marca')->nullable()->default(0);
			$table->integer('tipo')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('municiones');
	}

}
