<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Modules extends Model
{
	use SoftDeletes;
	protected $table 	= 'modules';
	protected $dates 	= ['deleted_at'];
	protected $fillable	=['module_name','status'];
	
	public function submodules(){
		return $this->hasMany('App\Models\Submodules','module_id','id');
	}
}
