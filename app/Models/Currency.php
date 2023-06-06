<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model
{
    use SoftDeletes;
	protected $table 	= 'currency';
	protected $dates 	= ['deleted_at'];
	protected $fillable	=['name','code','symbol','exchange_rate','status','created_by','updated_by'];
	
	
}
