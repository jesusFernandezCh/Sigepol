<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateNomencladoresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('nomencladores', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('valor', 35);
			$table->char('tipo', 10)->nullable()->default(-1);
			$table->integer('nomenclador')->nullable();
			$table->integer('status');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('nomencladores');
	}

}
