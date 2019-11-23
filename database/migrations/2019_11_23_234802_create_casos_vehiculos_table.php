<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasosVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casos_vehiculos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_caso')->nullable()->default(0);
			$table->integer('id_vehiculo')->nullable()->default(0);
			$table->integer('status')->nullable()->default(0);
			$table->date('fecha_recuperacion')->nullable();
			$table->date('hora_recuperacion')->nullable();
			$table->string('estado_vehiculo');
			$table->text('observacion');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('casos_vehiculos');
	}

}
