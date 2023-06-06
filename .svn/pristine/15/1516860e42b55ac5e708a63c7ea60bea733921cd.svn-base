<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class StaticPage extends Model
{
    use SoftDeletes;
	protected $table 	= 'static_page';
	protected $dates 	= ['deleted_at'];
	protected $fillable	=['language','name','url_name','content','status','quick_link','created_by','updated_by'];
	
	
}
