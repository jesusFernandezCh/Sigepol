<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToArmasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('armas', function(Blueprint $table)
		{
			$table->foreign('tipo', 'Refnomencladores123')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('marca', 'Refnomencladores124')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('calibre', 'Refnomencladores125')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('modelo', 'Refnomencladores126')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('armas', function(Blueprint $table)
		{
			$table->dropForeign('Refnomencladores123');
			$table->dropForeign('Refnomencladores124');
			$table->dropForeign('Refnomencladores125');
			$table->dropForeign('Refnomencladores126');
		});
	}

}
