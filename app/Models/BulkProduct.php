<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BulkProduct extends Model
{
    use SoftDeletes;
	protected $table 	= 'bulk_product';
	protected $dates 	= ['deleted_at'];
	protected $fillable	 = ['bulk_product_name','description','bulk_product_image','invest_amount','return_amount','status','created_by','updated_by','updated_at','created_at'];
	
	public function role()
	{
		return $this->belongsTo('App\Models\Roles','role_id','id')->select('id','role');
	}
}
