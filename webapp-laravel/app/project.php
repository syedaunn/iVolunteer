<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class project extends Model {

	//

	public function causes()
	{
			return $this->hasMany('App\projectCause','id','id');
	}
	public function skills()
	{
			return $this->hasMany('App\projectSkill','id','id');
	}
	public function sta()
	{
		return $this->hasMany('App\projectStatus','id','id');
	}
	public function app()
	{
		return $this->hasMany('App\userApply','project_id','id');
	}



}
