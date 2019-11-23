<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateArmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('armas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('tipo')->nullable()->default(0);
			$table->integer('marca')->nullable()->default(0);
			$table->integer('calibre')->nullable()->default(0);
			$table->integer('modelo')->nullable()->default(0);
			$table->string('serial_primario', 10)->nullable();
			$table->string('serial_secundario', 10)->nullable();
			$table->string('serial_terciario', 10)->nullable();
			$table->string('estado_arma');
			$table->integer('lugar_deposito')->nullable();
			$table->char('indicador', 10)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('armas');
	}

}
