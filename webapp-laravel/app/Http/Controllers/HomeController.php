<?php namespace App\Http\Controllers;

use App\UserProfile;
use App\User;
use Auth;


class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders your application's "dashboard" for users that
	| are authenticated. Of course, you are free to change or remove the
	| controller as you wish. It is just here to get your app started!
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

		$user =Auth::user();
		$profile = UserProfile::find($user->id);
		$causes = $profile->causes();
		$skills = $profile->skills();
		$projects = $profile->projects();
	return view('dashboard',['user' => $user, 'profile' => $profile, 'causes' => $causes , 'skills' => $skills, 'projects' => $projects]);

	
			$user =Auth::user();
			$profile = UserProfile::find($user->id);
			//$c = //$profile->causes();
			$d =[1 =>"abc", 2 => "def"]; //$c->first()->cause;
		return view('home',['user' => $d]);
	}

}
