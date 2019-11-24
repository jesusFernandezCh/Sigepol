<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGrupoUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('grupo_user', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('create_at', 10)->nullable();
			$table->char('update_at', 10)->nullable();
			$table->integer('usuario');
			$table->integer('grupo');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('grupo_user');
	}

}
