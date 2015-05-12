<?php

use \App\Cause;
use \App\Skill;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;



class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		 $this->call('CauseSeeder');
		 $this->call('SkillSeeder');
	}

}

class CauseSeeder extends Seeder{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		//Cause::unguard();

		Cause::firstOrCreate(['cause' => 'Animals']);
		Cause::firstOrCreate(['cause' => 'Arts and cultures']);
		Cause::firstOrCreate(['cause' => 'Civil Rights']);
		Cause::firstOrCreate(['cause' => 'Community & Ecnomic Development']);
		Cause::firstOrCreate(['cause' => 'Disaster Relief']);
		Cause::firstOrCreate(['cause' => 'Disease & Medical Research']);
		Cause::firstOrCreate(['cause' => 'Education']);
		Cause::firstOrCreate(['cause' => 'Employment Services']);
		Cause::firstOrCreate(['cause' => 'Environment']);
		Cause::firstOrCreate(['cause' => 'Health & Nutrition']);


	}

}




class SkillSeeder extends Seeder{

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Skill::unguard();

		Skill::firstOrCreate(['skill' => 'Accounting']);
		Skill::firstOrCreate(['skill' => 'Branding']);
		Skill::firstOrCreate(['skill' => 'Business Development']);
		Skill::firstOrCreate(['skill' => 'Coaching']);
		Skill::firstOrCreate(['skill' => 'Communications']);
		Skill::firstOrCreate(['skill' => 'Data Analysis']);
		Skill::firstOrCreate(['skill' => 'Data Administration']);
		Skill::firstOrCreate(['skill' => 'Digital Marketing']);
		Skill::firstOrCreate(['skill' => 'Entrepreneurship']);
		Skill::firstOrCreate(['skill' => 'Finance']);


	}

}
