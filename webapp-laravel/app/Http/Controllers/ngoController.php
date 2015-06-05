<?php namespace App\Http\Controllers;


use App\NgoDCause;
use App\ngoProfile;
use App\project;
use App\projectStatus;
use App\User;
use App\UserProfile;

class ngoController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| NGO Controller
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

	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{

//		$input = Input::all();
//		return view('ngo');

$c = NgoDCause::where('id','=','1')->firstOrFail();
//print_r($c);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$profile = ngoProfile::where('name','=',$id)->firstOrFail();

		$c = NgoDCause::where('id','=',$profile->id)->get();
		setlocale(LC_MONETARY,"en_US.utf8");
		$mon = money_format('%!.0i', $profile->amountSaved);

		$open_projects = project::whereHas('sta', function($q)
		{
		    $q->where('status', '=', 'open');

		})->whereRaw("posted_by_ngo = $profile->id")->get();

		$work_projects = project::whereHas('sta', function($q)
		{
		    $q->where('status', '=', 'working');

		})->whereRaw("posted_by_ngo = $profile->id")->get();

		$close_projects = project::whereHas('sta', function($q)
		{
		    $q->where('status', '=', 'close');

		})->whereRaw("posted_by_ngo = $profile->id")->get();

		$work= Array();
		$close= Array();

		if(empty($open_projects[0])){
			$open_projects= null;
		}

		if(empty($work_projects[0])){
			$work_projects= null;
		}else{
			foreach($work_projects as $wp){
					$d = projectStatus::where('id','=',$wp->id)->firstOrFail();
					$usr = User::find($d->volunteer)->firstOrFail();
					$usrPr =  UserProfile::find($d->volunteer)->firstOrFail();
					$wc = Array('project' => $wp,'status' => $d, 'user' => $usr, 'userP' => $usrPr);
					array_push($work,$wc);
			}
		}

		if(empty($close_projects[0])){
			$close_projects= null;
		}else{
			foreach($close_projects as $wp){
					$d = projectStatus::where('id','=',$wp->id)->firstOrFail();
					$usr = User::find($d->volunteer)->firstOrFail();
					$usrPr =  UserProfile::find($d->volunteer)->firstOrFail();
					$wc = Array('project' => $wp,'status' => $d, 'user' => $usr, 'userP' => $usrPr);
					array_push($close,$wc);
			}
		}

//print_r($close[0]['project']->title);
		return view('ngo',['ngo' =>$profile, 'cause' => $c, 'd' => $mon, 'open' =>$open_projects , 'close' => $close, 'work' => $work]);
	}
}
