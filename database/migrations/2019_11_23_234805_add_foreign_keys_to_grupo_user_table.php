<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToGrupoUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('grupo_user', function(Blueprint $table)
		{
			$table->foreign('grupo', 'Refgrupo340')->references('id')->on('grupos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usuario', 'Refusers339')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('grupo_user', function(Blueprint $table)
		{
			$table->dropForeign('Refgrupo340');
			$table->dropForeign('Refusers339');
		});
	}

}
