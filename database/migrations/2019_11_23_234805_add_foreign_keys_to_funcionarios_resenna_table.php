<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuncionariosResennaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcionarios_resenna', function(Blueprint $table)
		{
			$table->foreign('funcionario_actuante', 'Reffuncionarios251')->references('id')->on('funcionarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('resenna', 'Refresennas252')->references('id')->on('resennas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('funcionarios_resenna', function(Blueprint $table)
		{
			$table->dropForeign('Reffuncionarios251');
			$table->dropForeign('Refresennas252');
		});
	}

}
