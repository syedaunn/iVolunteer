<?php namespace App\Http\Controllers;

use App\Cause;
use App\Skill;

class projectController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Project Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		$causes = Cause::all();
		$skills = Skill::all();
		return view('project', ['causes' => $causes , 'skills' => $skills]);
	}

}
