<?php

namespace App\Http\Controllers\Admin\Site\Social;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\SocialLink;
use App\Models\MetaDetails;
use DB;
use Auth;
use View;
use Hash;

class SocialController extends Controller	
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    public function index()
    {
		$socialInfo = SocialLink::where('id',1)->whereNull('deleted_at')->get()->first();
		return view('admin/site/social/social',compact('socialInfo'));
    }
	
	
	public function update(Request $request)
    {
		DB::beginTransaction();
		try{
			$request = $request::all();
			$id = Helpers::encodeAndDecodeID($request['id'],'decode');
			unset($request['_token']);
			unset($request['id']);
			$request['updated_by'] = Auth::user()->id;
			SocialLink::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage-social/social')->with('success','Successfully social link updated');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage-social/social')->with('success','Something went wrong');
		}
	}
	
	
	public function metaIndex(){
		$metaInfo = MetaDetails::where('id',1)->whereNull('deleted_at')->get()->first();
		return view('admin/site/meta/meta',compact('metaInfo'));
	}
	
	public function updateMeta(Request $request)
    {
		DB::beginTransaction();
		try{
			$request = $request::all();
			$id = Helpers::encodeAndDecodeID($request['id'],'decode');
			unset($request['_token']);
			unset($request['id']);
			$request['updated_by'] = Auth::user()->id;
			MetaDetails::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage-meta/meta')->with('success','Successfully meta details updated');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage-meta/meta')->with('success','Something went wrong');
		}
	}
	
	
	
	
}
