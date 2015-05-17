<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\project;
use App\projectSkill;
use App\projectStatus;
use App\projectCause;
use App\User;
use App\UserProfile;
use Auth;
use App\ngoProfile;
use Input;
use Response;

class projectDetailController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$project = project::find($id);
		$cause = projectCause::where('id','=',$id)->get();
		$skill = projectSkill::where('id','=',$id)->get();
		$status = projectStatus::where('id','=',$id)->get();
		$user =Auth::user();
		$profile = null;
		if($user != null){
			$profile = UserProfile::find($user->id);
		}
		$ngoa = ngoProfile::find($project->posted_by_ngo);

		setlocale(LC_MONETARY,"en_US.utf8");
		$mon = money_format('%!.0i', $ngoa->amountSaved);

		return view('projectDetail',['mon' => $mon , 'ngo' => $ngoa , 'profile'=> $profile ,'user' => $user ,'status' => $status , 'project' => $project, 'cause' => $cause, 'skill' => $skill]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
