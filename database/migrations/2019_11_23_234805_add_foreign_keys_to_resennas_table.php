<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToResennasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('resennas', function(Blueprint $table)
		{
			$table->foreign('ubicacion', 'Refdirecciones240')->references('id')->on('direcciones')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('funcionario_resenna', 'Reffuncionarios238')->references('id')->on('funcionarios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('dependencia', 'Refnomencladores92')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('naturaleza_delito', 'Refnomencladores93')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('organismo', 'Refnomencladores95')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('delito', 'Refnomencladores96')->references('id')->on('nomencladores')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('persona', 'Refpersonas_naturales237')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('identidad_falsa', 'Refpersonas_naturales241')->references('id')->on('personas_naturales')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('usuario', 'Refusers337')->references('id')->on('users')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('resennas', function(Blueprint $table)
		{
			$table->dropForeign('Refdirecciones240');
			$table->dropForeign('Reffuncionarios238');
			$table->dropForeign('Refnomencladores92');
			$table->dropForeign('Refnomencladores93');
			$table->dropForeign('Refnomencladores95');
			$table->dropForeign('Refnomencladores96');
			$table->dropForeign('Refpersonas_naturales237');
			$table->dropForeign('Refpersonas_naturales241');
			$table->dropForeign('Refusers337');
		});
	}

}
