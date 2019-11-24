<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDireccionesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('direcciones', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('estado')->nullable()->default(0);
			$table->integer('ciudad')->nullable()->default(0);
			$table->integer('municipio')->nullable()->default(0);
			$table->integer('parroquia')->nullable()->default(0);
			$table->integer('cuadrante')->nullable()->default(0);
			$table->string('direccion', 125);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('direcciones');
	}

}
