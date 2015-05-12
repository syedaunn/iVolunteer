<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCauses extends Model {

	//
	public function users()
	{
			return $this->belongsTo('App\UserProfile','id','id');
	}

}
