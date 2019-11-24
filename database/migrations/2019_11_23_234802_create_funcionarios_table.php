<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_siipol')->nullable();
			$table->string('credencial', 10);
			$table->integer('rango')->nullable()->default(0);
			$table->integer('organismo')->nullable()->default(0);
			$table->integer('entidad')->nullable()->default(0);
			$table->integer('tipo')->nullable()->default(0);
			$table->integer('persona')->nullable()->default(0);
			$table->integer('email')->nullable();
			$table->boolean('status');
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
		Schema::drop('funcionarios');
	}

}
