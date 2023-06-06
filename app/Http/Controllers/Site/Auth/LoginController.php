<?php

namespace App\Http\Controllers\Site\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Helper\Admin\Helpers as Helpers;
use Illuminate\Http\Request;
use App\Models\Roles;
use Auth;
use File;
use DB;

class LoginController extends Controller
{


    public function login(){
        return view('site.auth.login');
    }

    public function postLogin(Request $request)
    {
        $input = $request->all();
		
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
		
        if(auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password'])))
        {	
            return redirect('/dashboard');		
        }else{
            return redirect('/login')->with('error','Invalid login details');
        }
    }
	
	public function logout(){
		auth()->logout();
		return redirect('/')->with('error','Logout Successfully');
	}

    public function forgot(){
        return view('site.auth.forgot');
    }

    public function sendpassword(Request $request){
        DB::beginTransaction();
		try{
            $input = $request->all();
            
            $data = [];
            $template = 'site.emails.forgot';
            $to_mail = $input['email'];
            $subject = "Welcome";
            Helpers::sendMail($data, $template, $to_mail, $subject);
            DB::commit();
            return redirect('login')->with('success','Successfully Password sent to your mail');
        } catch(Exception $e) {
			DB::rollback();
			return View::make('forgot')->withInput()->with('error',$e->getMessage());
		}
    }
}