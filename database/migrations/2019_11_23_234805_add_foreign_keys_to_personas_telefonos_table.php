<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPersonasTelefonosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('personas_telefonos', function(Blueprint $table)
		{
			$table->foreign('persona', 'Refpersonas_naturales73')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('telefonos', 'Reftelefonos74')->references('id')->on('telefonos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('personas_telefonos', function(Blueprint $table)
		{
			$table->dropForeign('Refpersonas_naturales73');
			$table->dropForeign('Reftelefonos74');
		});
	}

}
