<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class ngoProfile extends Model {

	//


	public function causes()
	{
			return $this->hasMany('App\NgoCau','id','id');
	}
}
