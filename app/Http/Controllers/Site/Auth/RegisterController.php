<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use Request;
use App\Models\Users;
use DB;
use View;
use Hash;

class RegisterController extends Controller
{


    public function register(){
        return view('site.auth.register');
    }

    public function registerStore(Request $request){
        DB::beginTransaction();
		try{
            $request = $request::all();
            
			$request['name'] = $request['first_name'].' '.$request['last_name'];
			$request['role_type'] = 'Customer';
			$request['register_type'] = 'Web';
			$request['password'] = Hash::make($request['password']);
            unset($request['_token']);
            unset($request['confirm_password']);
            unset($request['agree_terms_and_policy']);
			Users::create($request);
			DB::commit();
            return redirect('dashboard')->with('success','Successfully Register');
        } catch(Exception $e) {
			DB::rollback();
			return View::make('register')->withInput()->with('error',$e->getMessage());
		}
    }
    
}
