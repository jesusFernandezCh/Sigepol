<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFuncionariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->foreign('email', 'Refemails258')->references('id')->on('emails')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('rango', 'Refnomencladores38')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('organismo', 'Refnomencladores39')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('entidad', 'Refnomencladores40')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('tipo', 'Refnomencladores41')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('persona', 'Refpersonas_naturales236')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('funcionarios', function(Blueprint $table)
		{
			$table->dropForeign('Refemails258');
			$table->dropForeign('Refnomencladores38');
			$table->dropForeign('Refnomencladores39');
			$table->dropForeign('Refnomencladores40');
			$table->dropForeign('Refnomencladores41');
			$table->dropForeign('Refpersonas_naturales236');
		});
	}

}
