<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasJuridicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas_juridicas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('nombre', 35);
			$table->string('razon_social', 35);
			$table->char('rit', 10)->nullable();
			$table->integer('ubicacion')->nullable()->default(0);
			$table->integer('representante_legal')->default(0);
			$table->date('fecha_creacion')->nullable();
			$table->boolean('status');
			$table->integer('condicion')->nullable()->default(0);
			$table->integer('email')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas_juridicas');
	}

}
