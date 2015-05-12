<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfileTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('last_name');
			$table->integer('followers')->unsigned()->default(0);
			$table->integer('impact')->unsigned()->default(0);
			$table->enum('type', ['volunteer', 'ngo']);
			$table->enum('status',['busy','away','available'])->default('available');
			$table->string('twitter')->nullable();
			$table->string('facebook')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('city')->nullable();
			$table->string('country');
			$table->string('image')->nullable();
			$table->softDeletes();
			$table->timestamps();
			$table->foreign('id')->references('id')->on('users');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('user_profiles');
	}

}
