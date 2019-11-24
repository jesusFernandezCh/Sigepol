<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFuncionariosResennaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('funcionarios_resenna', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('funcionario_actuante')->nullable()->default(0);
			$table->integer('resenna')->nullable()->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('funcionarios_resenna');
	}

}
