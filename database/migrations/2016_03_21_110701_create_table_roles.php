<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableRoles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('roles', function(Blueprint $table)
		{
			$table->integer('id',true,true);
			$table->string('nombre',50);
			$table->string('descripcion',100);
			$table->bigInteger('op_tipo_involucrado',false,true);
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
		Schema::drop('roles');
	}

}
