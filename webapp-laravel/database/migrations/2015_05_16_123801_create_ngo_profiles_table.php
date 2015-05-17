<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNgoProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ngo_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name');
			$table->text('mission');
			$table->text('whatWeDo');
			$table->string('facebook')->nullable();
			$table->string('twitter')->nullable();
			$table->string('linkedin')->nullable();
			$table->string('website')->nullable();
			$table->string('image');
			$table->integer('amountSaved')->default(0);
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
		Schema::drop('ngo_profiles');
	}

}
