<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTelefonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('telefonos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('numero', 7);
			$table->string('codigo_imei', 25)->nullable();
			$table->string('liena_telefonica', 25)->nullable();
			$table->integer('tipo')->nullable()->default(0);
			$table->integer('proveedor_servicio')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('telefonos');
	}

}
