<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePersonasNaturalesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('personas_naturales', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('cedula', 9);
			$table->string('pasaporte', 35)->nullable();
			$table->string('p_nombre', 35)->nullable();
			$table->string('p_apellido', 35)->nullable();
			$table->string('s_nombre', 35)->nullable();
			$table->string('s_apellido', 35)->nullable();
			$table->char('sexo', 1)->nullable();
			$table->char('nacionalidad', 1)->nullable();
			$table->integer('gentilicio')->nullable()->default(-1);
			$table->date('fecha_nacimiento')->nullable();
			$table->string('estado civil', 10)->nullable();
			$table->integer('talla')->nullable()->default(-1);
			$table->integer('raza')->nullable()->default(-1);
			$table->integer('contextura')->nullable()->default(-1);
			$table->integer('peso')->nullable();
			$table->integer('medida')->nullable()->default(-1);
			$table->integer('nivel_instruccion')->nullable()->default(-1);
			$table->integer('profesion_oficio')->nullable()->default(-1);
			$table->integer('email')->nullable()->default(-1);
			$table->boolean('lee')->nullable();
			$table->boolean('escribe')->nullable();
			$table->string('foto')->nullable();
			$table->boolean('status');
			$table->boolean('validado_saime')->nullable();
			$table->integer('situacion');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('personas_naturales');
	}

}
