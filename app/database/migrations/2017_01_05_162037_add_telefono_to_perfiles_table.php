<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddTelefonoToPerfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('perfiles', function(Blueprint $table)
		{
			$table->string('telefono');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('perfiles', function(Blueprint $table)
		{
			Schema::dropColumn('telefono');
		});
	}

}
