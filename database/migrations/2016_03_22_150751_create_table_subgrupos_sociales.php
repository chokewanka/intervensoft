<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableSubgruposSociales extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('subgrupos_sociales', function(Blueprint $table)
		{
			//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('subgrupos_sociales', function(Blueprint $table)
		{
			Schema::drop('subgrupos_sociales');
		});
	}

}
