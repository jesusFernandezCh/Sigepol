<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos_funcionarios', function(Blueprint $table)
		{
			$table->foreign('caso', 'Refcasos166')->references('id')->on('casos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('funcionario', 'Reffuncionarios200')->references('id')->on('funcionarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos_funcionarios', function(Blueprint $table)
		{
			$table->dropForeign('Refcasos166');
			$table->dropForeign('Reffuncionarios200');
		});
	}

}
