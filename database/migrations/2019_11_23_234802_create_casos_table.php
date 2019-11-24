<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCasosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('casos', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('id_minuta')->default(0);
			$table->integer('organismo_act')->nullable()->default(0);
			$table->string('observacion')->nullable();
			$table->char('indicador', 10)->nullable();
			$table->boolean('status');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('casos');
	}

}
