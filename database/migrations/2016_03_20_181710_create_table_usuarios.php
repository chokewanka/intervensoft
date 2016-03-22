<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUsuarios extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('usuarios', function(Blueprint $table)
		{
			$table->integer('id_involucrado',false,true);
			$table->string('nombre',100);
			$table->binary('contrasena');
			$table->integer('id_rol',false,true);
			$table->bigInteger('op_estado',false,true);
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
		Schema::drop('usuarios');
	}

}
