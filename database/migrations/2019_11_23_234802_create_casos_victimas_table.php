<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasosVictimasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casos_victimas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_caso')->default(0);
			$table->integer('id_persona')->default(0);
			$table->integer('status_victima')->default(0);
			$table->integer('lugar_cautiverio')->default(0);
			$table->string('motivo_liberiacion');
			$table->boolean('pago_x_liberacion');
			$table->integer('Cantidad_pagada');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('casos_victimas');
	}

}
