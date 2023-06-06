<?php

namespace App\Http\Controllers\Site\Staticpage;

use App\Http\Controllers\Controller as Controller;
use Request;
use DB;
use Hash;
use Auth;
use App\Models\Users;
use App\Models\StaticPage;

class StaticpageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
       
    }

    public function index($name){
      
		    $pageInfo = StaticPage::where('url_name',$name)->get()->first();
        
        return view('site/staticpage/pages',compact('pageInfo')); 
	}
	
}
