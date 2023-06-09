<?php

namespace App\Http\Helper\Admin;
use App\Http\Helper\Admin\EncryptIdAlgorithm as EncryptIdAlgorithm;
use Request;
use Auth;
use App\Models\SiteSetting;
use App\Models\MetaDetails;
use App\Models\SocialLink;
use App\Models\StaticPage;
use App\Models\Currency;

use Illuminate\Support\Facades\Mail;

class Helpers {

    public static function handleSiderActive($Page = ''){
		$currentPage = Request::segment(3);
		switch(true){
			case ($currentPage == $Page):
				return 'active';
				break;
		}
	}
	
	public static function encodeAndDecodeID($id, $type = 'encode') {
        $encode_decode_alg = 'base64_alg';
        return EncryptIdAlgorithm::$encode_decode_alg($id, $type);
    }

	public static function checkModulePermission($mainModule = '',$subModule = '',$icon = ''){
		if(Auth::user()->role_type != 'Admin'){
			$path = storage_path('permission');
			$fileName = Auth::user()->id.'.json';
			$data = file_get_contents($path.'/'.$fileName);
			$data = json_decode($data,true);
			$module = json_decode($data['module'],true);
			//echo "<pre>";print_r($module);die;
			if(!empty($mainModule) && !empty($subModule) && !empty($icon)){
				if(isset($module[$mainModule]) && isset($module[$mainModule][$subModule]) && isset($module[$mainModule][$subModule][$icon])){
					return true;
				}else{
					return false;
				}
			}elseif(!empty($mainModule) && !empty($subModule)){
				if(isset($module[$mainModule]) && isset($module[$mainModule][$subModule])){
					return true;
				}else{
					return false;
				}
			}elseif(!empty($mainModule)){
				if(isset($module[$mainModule])){
					return true;
				}else{
					return false;
				}
			}
		}else{
			return true;
		}
	}

	public static function siteSetting(){
		$dataArr['setting'] = SiteSetting::where('id',1)->get()->first();
		$dataArr['meta'] = MetaDetails::where('id',1)->get()->first();
		$dataArr['social'] = SocialLink::where('id',1)->get()->first();
		$dataArr['staticPage'] = StaticPage::where('quick_link','Yes')->where('status','Active')->whereNull('deleted_at')->get();
		$dataArr['currency'] = Currency::where('status','Active')->whereNull('deleted_at')->get();
		return $dataArr;
	}


	public static function sendMail($data, $template, $to_mail, $subject){
		Mail::send($template,$data,function($mail) use ($to_mail, $subject){
				$mail->from('triviziontechnologies@gmail.com');
				$mail->to($to_mail);
				$mail->subject($subject);
		});
	
		return 'Successfully send';
	}

	
}