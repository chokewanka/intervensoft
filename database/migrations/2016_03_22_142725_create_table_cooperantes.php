<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableCooperantes extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('cooperantes', function(Blueprint $table)
		{
			$table->integer('id',true,true);
			$table->string('nombre',100);
			$table->string('siglas',20)->nullable();
			$table->string('sumilla',255)->nullable();
			$table->bigInteger('op_sector',false,true)->nullable();
			$table->bigInteger('op_naturaleza',false,true)->nullable();
			$table->integer('id_pais',false,true)->nullable();
			$table->string('domicilio',200)->nullable();
			$table->string('telefono',50)->nullable();
			$table->string('correo_electronico',100)->nullable();
			$table->string('pagina_web',100)->nullable();
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
		Schema::table('cooperantes', function(Blueprint $table)
		{
			Schema::drop('cooperantes');
		});
	}

}
