<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableModulos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('modulos', function(Blueprint $table)
		{
			$table->integer('id',true,true);
			$table->string('nombre',50);
			$table->string('descripcion',100)->nullable();
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
		Schema::table('modulos', function(Blueprint $table)
		{
			Schema::drop('modulos');
		});
	}

}
