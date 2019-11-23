<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOccisosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('occisos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('condicion')->nullable()->default(0);
			$table->integer('id_persona')->nullable()->default(0);
			$table->integer('tipo_muerte')->nullable()->default(0);
			$table->date('fecha_muerte')->nullable();
			$table->date('hora_muerte')->nullable();
			$table->integer('lugar_muerte')->nullable()->default(0);
			$table->integer('motivo_muerte')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('occisos');
	}

}
