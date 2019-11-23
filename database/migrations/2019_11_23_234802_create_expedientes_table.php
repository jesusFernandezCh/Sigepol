<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateExpedientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('expedientes', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('numero', 18)->nullable();
			$table->date('fecha_apertura')->nullable();
			$table->dateTime('updated_at')->nullable();
			$table->dateTime('create_at')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('expedientes');
	}

}
