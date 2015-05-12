<?php namespace App;

use Illuminate\Database\Eloquent\Model;
//use Illuminate\Database\Eloquent\SoftDeletingTrait;

class UserProfile extends Model {

//	use SoftDeletes;
//  protected $dates = ['deleted_at'];
protected $softDelete = true;
	//
	protected $table = 'user_profiles';

	public function user()
	{
			return $this->belongsTo('App\User', 'id', 'id');
	}
	public function causes()
	{
			return $this->hasMany('App\UserCauses','id','id');
	}
	public function skills()
	{
			return $this->hasMany('App\UserSkills','id','id');
	}
	public function projects()
	{
		return $this->hasMany('App\UserProjects','user_id','id');
	}

}
