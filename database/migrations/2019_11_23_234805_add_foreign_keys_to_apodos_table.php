<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToApodosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('apodos', function(Blueprint $table)
		{
			$table->foreign('persona', 'Refpersonas_naturales263')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('apodos', function(Blueprint $table)
		{
			$table->dropForeign('Refpersonas_naturales263');
		});
	}

}
