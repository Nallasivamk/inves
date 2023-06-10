<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CategoryProduct extends Model
{
    use SoftDeletes;
	protected $table 	= 'category';
	protected $dates 	= ['deleted_at'];
	protected $fillable	 = ['category_name','code','status','created_by','updated_by','updated_at','created_at','deleted_at'];
	
	public function role()
	{
		return $this->belongsTo('App\Models\Roles','role_id','id')->select('id','role');
	}
}
