<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Users extends Model
{
    use SoftDeletes;
	protected $table 	= 'users';
	protected $dates 	= ['deleted_at'];
	protected $fillable	=['first_name','last_name','name','email','phone','email_verified_at','password','role_id','remember_token','role_type','status','latitude','longitude','register_type'];
	
	public function role()
	{
		return $this->belongsTo('App\Models\Roles','role_id','id')->select('id','role');
	}
}
