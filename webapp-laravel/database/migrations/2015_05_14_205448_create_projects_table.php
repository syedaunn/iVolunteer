<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('posted_by_ngo');
			$table->integer('posted_by_user');
			$table->text('title');
			$table->text('impact');
			$table->integer('impactAmount');
			$table->text('WhatWeNeed');
			$table->text('howWillThisHelp');
			$table->text('whatWeHaveInPlace');
			$table->text('FunFacts');
			$table->integer('timeFrom');
			$table->string('image')->nullable();

			$table->integer('timeTo');
			$table->integer('Duration');
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
		Schema::drop('projects');
	}

}
