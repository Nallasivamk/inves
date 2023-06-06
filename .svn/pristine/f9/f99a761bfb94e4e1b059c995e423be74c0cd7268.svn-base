<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Roles extends Model
{
    use SoftDeletes;
	protected $table 	= 'roles';
	protected $dates 	= ['deleted_at'];
	protected $fillable	=['role','role_desc','permission_id','status','created_by','updated_by'];
	
	public function user()
	{
		return $this->belongsTo('App\Models\Users','created_by','id')->select('id','name');
	}
	
	public function permission()
	{
		return $this->belongsTo('App\Models\Permission','permission_id','id')->select('id','permission');
	}
	
	
}
