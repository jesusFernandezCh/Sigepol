<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateResennasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('resennas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('numero');
			$table->integer('numero_oficio');
			$table->date('fecha_oficio');
			$table->integer('dependencia')->nullable()->default(0);
			$table->date('fecha_detension')->nullable();
			$table->dateTime('hora')->nullable();
			$table->integer('nro_averiguacion');
			$table->boolean('posee_pd1');
			$table->integer('nro_pd1');
			$table->boolean('indicador');
			$table->boolean('situacion');
			$table->integer('organismo')->nullable()->default(0);
			$table->integer('naturaleza_delito')->nullable()->default(0);
			$table->integer('delito')->nullable()->default(0);
			$table->integer('persona')->nullable()->default(0);
			$table->integer('identidad_falsa')->nullable()->default(0);
			$table->integer('ubicacion')->nullable()->default(0);
			$table->integer('funcionario_resenna')->nullable()->default(0);
			$table->timestamps();
			$table->integer('usuario')->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('resennas');
	}

}
