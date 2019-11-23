<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToBandasPersonasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('bandas_personas', function(Blueprint $table)
		{
			$table->foreign('banda', 'Refbandas180')->references('id')->on('bandas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('persona', 'Refpersonas_naturales181')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('bandas_personas', function(Blueprint $table)
		{
			$table->dropForeign('Refbandas180');
			$table->dropForeign('Refpersonas_naturales181');
		});
	}

}
