<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserAppliesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_applies', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('user_id');
			$table->integer('project_id');
			$table->enum('status',['accepted','chooseAnother','pending'])->default('pending');
			$table->timestamps();

		
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user_applies');
	}

}
