<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDrogasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('drogas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tipo')->nullable()->default(0);
			$table->integer('cantidad');
			$table->integer('medida')->nullable()->default(0);
			$table->integer('estado')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('drogas');
	}

}
