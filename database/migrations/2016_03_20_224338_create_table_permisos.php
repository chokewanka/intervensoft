<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePermisos extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('permisos', function(Blueprint $table)
		{
			$table->integer('id',true,true);
			$table->string('nombre',50);
			$table->string('descripcion',100);
			$table->bigInteger('op_tipo',false,true);
			$table->integer('id_padre',false,true)->nullable();
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
		Schema::drop('permisos');
	}

}
