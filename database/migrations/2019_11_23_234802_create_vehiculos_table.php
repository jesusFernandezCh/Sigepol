<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vehiculos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('placa', 10)->nullable();
			$table->char('placa_anterior', 10)->nullable();
			$table->string('serial_carroceria', 30);
			$table->string('serial_motor', 10)->nullable();
			$table->date('anio')->nullable();
			$table->integer('propietario')->nullable()->default(-1);
			$table->integer('tipo')->nullable()->default(0);
			$table->integer('clase')->nullable()->default(0);
			$table->integer('marca')->nullable()->default(0);
			$table->integer('modelo')->nullable()->default(0);
			$table->integer('color_arriba')->nullable()->default(0);
			$table->integer('color_abajo')->nullable()->default(0);
			$table->integer('uso')->nullable()->default(0);
			$table->text('observacion')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('vehiculos');
	}

}
