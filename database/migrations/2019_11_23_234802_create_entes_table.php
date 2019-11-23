<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEntesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('entes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('rif', 10)->nullable();
			$table->integer('tipo')->nullable()->default(0);
			$table->integer('direccion')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('entes');
	}

}
