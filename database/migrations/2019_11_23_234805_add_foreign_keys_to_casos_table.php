<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCasosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('casos', function(Blueprint $table)
		{
			$table->foreign('id_minuta', 'Refminutas104')->references('id')->on('minutas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('organismo_act', 'Refnomencladores227')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('casos', function(Blueprint $table)
		{
			$table->dropForeign('Refminutas104');
			$table->dropForeign('Refnomencladores227');
		});
	}

}
