<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasosVictimariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casos_victimarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_caso')->nullable()->default(0);
			$table->date('Fecha_aprehencion')->nullable();
			$table->integer('id_persona')->default(0);
			$table->integer('lugar_aprehencion')->default(0);
			$table->integer('estado_salud')->default(0);
			$table->integer('tipo_lesion')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('casos_victimarios');
	}

}
