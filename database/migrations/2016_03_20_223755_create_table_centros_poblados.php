<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCentrosPoblados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('centros_poblados', function(Blueprint $table)
		{
			$table->integer('id',true,true);
			$table->string('nombre',50);
			$table->integer('id_distrito',false,true);
			$table->boolean('fue_eliminado');
			$table->string('observaciones',255)->nullable();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('centros_poblados');
	}

}
