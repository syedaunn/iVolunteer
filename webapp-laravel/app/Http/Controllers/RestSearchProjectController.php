<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Request;
use Url;
use Input;
use Response;
use Auth;
use App\project;
use App\projectCause;
use App\projectSkill;
use App\projectStatus;
use App\Skill;
use App\Cause;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RestSearchProjectController extends Controller {

	/**
	 * Display a listing of Project by Cause/Skill filter OR by search method.
	 *
	 * @return Response
	 */
	public function index()
	{

			if(Input::has('name_filter'))
			{
				//Search by Name
				$search = Input::get('name_filter');
				str_replace("+"," ",$search);

				//TODO implement search logic
				//Get Projects From MODEL and Return
				$projects = project::whereRaw("title LIKE \"$search%\"")->get();
				return Response::json($projects);
				App::error(function(ModelNotFoundException $e)
				{
				    return Response::make('Not Found', 404);
				});

			}else{
				//Search by Cause and Skill Filter
				$causeList = array();
				$skillList = array();
				$i=1;

				while(true){
					if(Input::has("cause_filter_$i")){
						$c = Input::get("cause_filter_$i");
						$c = Cause::find($c);
						array_push($causeList,$c->cause);
						$i = $i+1;
					}else{
						break;
					}
				}
				$i=1;
				while(true){
					if(Input::has("skill_filter_$i")){
						$c = Input::get("skill_filter_$i");
						$c = Skill::find($c);
						array_push($skillList,$c->skill);
						$i = $i+1;
					}else{
						break;
					}
				}


				//Get Projects From MODEL and Return

				$projects = Array();

				if(count($causeList)>0){

					foreach($causeList as $cl){
						$ps  = project::whereHas('causes', function($q) use($cl)
						{
						    $q->where('cause', 'in', $cl);

						})->get();
						if(!empty($ps[0]))
							array_push($projects,$ps);

					}
				}

				array_push($skillList,'website');

				if(count($skillList)>0){
					foreach($skillList as $sk){

						$ps  = project::whereHas('skills', function($q) use($sk)
						{
						    $q->where('skill', '=', $sk);

						})->get();
						//print_r($projects);
						if(!empty($ps[0]))
							array_push($projects,$ps);
					}
				}


				//$projects = $projects[0];
				//print_r($projects);
				$projects = $projects[0];
				$cn = count($projects);
				//print_r($cn);
				$res =" <div class=\"opportunities-results\"><h3>$cn projects found</h3></div>";

				$res = $res . "<article class=\"pbm-project-status\">";

				foreach($projects as $pr){
						$opp= "<div id=\"pr-$pr->id\" class=\"panel-projectcard \"><div class=\"inner\">";

						//header
						$opp = $opp . "<header>";
						$opp = $opp .	"	<div style=\"background-image:url( '/img/website_design_40x40.png')\"></div>";
						$opp = $opp .	"<h2><a href=\"#\">$pr->title</a></h2>";
						$opp = $opp . "<h5><a href=\"#\">";
						$opp = $opp .	"$pr->timeFrom - $pr->timeTo hours";
						$opp = $opp . "over $pr->Duration weeks";
						$opp = $opp . "</a></h5>";
						$opp = $opp . "</header>";
						//End - header
						// <a>
						$mon = money_format('%.0i', $pr->impactAmount);
				  $opp = $opp . "<a href=\"#\">";
					$opp = $opp . "<figure style=\"background-image: url('/img/$pr->image')\" class=\"hasimage\">";
				  $opp = $opp ." <i></i><figcaption><p>";
					$opp = $opp .	"This project will save us PKR $mon, allowing us to <strong>$pr->impact.</strong>";
					$opp = $opp .  "</p><div></div></figcaption></figure></a>";
					//</a>



					$opp = $opp .  "<section><div class=\"organizationinfo\">";



					$opp = $opp . "<a href=\"#\"><img style=\"height: 32px; width: 32px;\" src=\"./Catchafire - Projects_files/ssheth_50x50_cropped.png\"></a>";


				   $opp = $opp . "<h3><a href=\"#\">Ektta</a></h3>";
		      $opp = $opp ."<h4><a href=\"#\">Community &amp; Economic Development</a></h4>";
					 $opp = $opp . "</div><!-- organizationinfo -->";
				    $opp = $opp . "<a class=\"btn-action btn-volunteer\" href=\"#\">Volunteer</a>";
						$opp = $opp .   "</section>";


						$opp = $opp . "</div></div>";
						$res = $res . $opp;
				}

				$res = $res . "</article>";


				return $res;
			}

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
		if(Input::has('name_filter'))
		{
			//Search by Name
			$search = Input::get('name_filter');
			str_replace("+"," ",$search);

			//TODO implement search logic
			//Get Projects From MODEL and Return
			$projects = project::whereRaw("title LIKE \"$search%\"")->get();
			return Response::json($projects);
			App::error(function(ModelNotFoundException $e)
			{
					return Response::make('Not Found', 404);
			});

		}else{
			//Search by Cause and Skill Filter
			$causeList = array();
			$skillList = array();
			$i=1;

			while(true){
				if(Input::has("cause_filter_$i")){
					$c = Input::get("cause_filter_$i");
					$c = Cause::find($c);
					array_push($causeList,$c->cause);
					$i = $i+1;
				}else{
					break;
				}
			}
			$i=1;
			while(true){
				if(Input::has("skill_filter_$i")){
					$c = Input::get("skill_filter_$i");
					$c = Skill::find($c);
					array_push($skillList,$c->skill);
					$i = $i+1;
				}else{
					break;
				}
			}

			//Get Projects From MODEL and Return

			$projects = Array();
			if(count($causeList)>0){
				foreach($causeList as $cl){
					$ps  = project::whereHas('causes', function($q) use($cl)
					{
							$q->where('cause', 'in', $cl);

					})->get();

					array_push($projects,$ps);
				}
			}

			if(count($skillList)>0){
				foreach($skillList as $sk){

					$ps  = project::whereHas('skills', function($q) use($sk)
					{
							$q->where('skill', '=', $sk);
					})->get();
					array_push($projects,$ps);
					//print_r($projects_skills);
				}
			}
			$projects = $projects[0];
			return Response::json($projects);
		}

	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
