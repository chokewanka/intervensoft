<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInvolucrados extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('involucrados', function(Blueprint $table)
		{
			$table->integer('id',true,true);
			$table->string('nombres',50);
			$table->string('apellido_paterno',50)->nullable();
			$table->string('apellido_materno',50)->nullable();
			$table->bigInteger('op_tipo_documento_identidad',false,true)->nullable();
			$table->string('documento_identidad',20)->nullable();
			$table->bigInteger('op_sexo',false,true);
			$table->date('fecha_nacimiento');
			$table->string('fotografia',255)->nullable();
			$table->bigInteger('op_tipo',false,true);
			$table->integer('id_cooperante',false,true)->nullable();
			$table->integer('id_grupo_vulnerable',false,true)->nullable();
			$table->integer('id_grupo_opinion',false,true)->nullable();
			$table->string('sumilla',255)->nullable();
			$table->string('op_profesion',50)->nullable();
			$table->string('ocupacion',50)->nullable();
			$table->string('especialidades',255)->nullable();
			$table->string('intereses',255)->nullable();
			$table->boolean('reside_en_peru');
			$table->integer('id_pais',false,true)->nullable();
			$table->bigInteger('id_departamento',false,true)->nullable();
			$table->integer('id_provincia',false,true)->nullable();
			$table->integer('id_distrito',false,true)->nullable();
			$table->string('centro_poblado',100)->nullable();
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
		Schema::drop('involucrados');
	}

}
