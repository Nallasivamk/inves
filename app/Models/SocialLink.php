<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SocialLink extends Model
{
    use SoftDeletes;
	protected $table 	= 'social_links';
	protected $dates 	= ['deleted_at'];
	protected $fillable	=['facebook_link','twitter_link','linkedin_link','pintrest_link','play_store','app_store','created_by','updated_by'];
	
	
}
