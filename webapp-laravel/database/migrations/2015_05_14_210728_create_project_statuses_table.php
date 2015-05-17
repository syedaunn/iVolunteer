<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectStatusesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('project_statuses', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('volunteer')->nullable();
			$table->enum('status',['open','working','close'])->default('open');
			$table->timestamp('assigned_on')->nullable();
			$table->text('testimony')->nullable();
			$table->timestamps();
			$table->foreign('id')->references('id')->on('projects');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('project_statuses');
	}

}
