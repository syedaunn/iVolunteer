<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgoDCausesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ngo_d_causes', function(Blueprint $table)
		{
			$table->integer('id');
			$table->string('cause');
			$table->timestamps();
			$table->primary(['id', 'cause']);
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ngo_d_causes');
	}

}
