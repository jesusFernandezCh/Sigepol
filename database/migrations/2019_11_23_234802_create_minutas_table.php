<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMinutasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('minutas', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('direccion_despacho')->default(0);
			$table->integer('despacho')->nullable()->default(0);
			$table->date('fecha')->nullable();
			$table->integer('resenna')->nullable()->default(0);
			$table->integer('lugar_hecho')->default(0);
			$table->integer('movil')->nullable()->default(0);
			$table->integer('delito')->nullable()->default(0);
			$table->integer('fiscalia')->nullable()->default(0);
			$table->integer('fiscal')->nullable()->default(0);
			$table->integer('expediente')->nullable()->default(0);
			$table->boolean('allanamiento');
			$table->integer('tipo_detencion')->nullable()->default(0);
			$table->char('prioridad', 4);
			$table->dateTime('hora_delito')->nullable();
			$table->boolean('pago_liberacion');
			$table->integer('monto_pagado');
			$table->integer('tipo_moneda')->nullable()->default(0);
			$table->date('fecha_remision')->nullable();
			$table->boolean('status');
			$table->string('situacion', 1);
			$table->text('modus_operandis');
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
		Schema::drop('minutas');
	}

}
