<?php

namespace App\Http\Controllers\Admin\Site\Setting;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\SiteSetting;
use DB;
use Auth;
use View;
use Hash;

class SettingController extends Controller	
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
		$settingInfo = SiteSetting::where('id',1)->whereNull('deleted_at')->get()->first();
		return view('admin/site/setting/setting',compact('settingInfo'));
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
			
			if(isset($_FILES['logo']['name']) && !empty($_FILES['logo']['name'])){
				$path = public_path() . '/images/uploads/logo';
				if (!file_exists($path)) {
					mkdir($path, 0777, true);
				}
				$request['logo'] = str_replace(' ','',basename($_FILES['logo']['name']));
				move_uploaded_file($_FILES['logo']['tmp_name'], $path.'/'. $request['logo']);
			}
			
			if(isset($_FILES['favicon']['name']) && !empty($_FILES['favicon']['name'])){
				$path = public_path() . '/images/uploads/favicon';
				if (!file_exists($path)) {
					mkdir($path, 0777, true);
				}
				$request['favicon'] = str_replace(' ','',basename($_FILES['favicon']['name']));
				move_uploaded_file($_FILES['favicon']['tmp_name'], $path.'/'. $request['favicon']);
			}
			SiteSetting::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage-setting/setting')->with('success','Successfully social link updated');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage-social/social')->with('success','Something went wrong');
		}
	}
	
	
	
	
	
	
	
}
