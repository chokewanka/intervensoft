<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableOpciones extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opciones', function(Blueprint $table)
		{
			$table->bigInteger('id',true,true);
			$table->string('nombre',50);
			$table->string('descripcion',100)->nullable();
			$table->integer('id_columna',false,true)->nullable();
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
		Schema::drop('opciones');
	}

}
