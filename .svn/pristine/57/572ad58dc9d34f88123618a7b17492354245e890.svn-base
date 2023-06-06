<?php

namespace App\Http\Controllers\Auth;

use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Models\Roles;
use Auth;
use File;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function getLogin(){
        return view('auth.login');
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
			if(Auth::user()->role_type == 'Admin'){
				return redirect('admin/dashboard/dashboard');
			}else if(Auth::user()->role_type == 'Subadmin'){
				
				$role_id = Auth::user()->role_id;
				$user_id = Auth::user()->id;
				$this->setPermissionFile($role_id,$user_id);
				return redirect('admin/dashboard/dashboard');
			}else{
                auth()->logout();
                return redirect('admin/login')->with('error','Invalid login details');
            }
        }else{
            auth()->logout();
            return redirect('admin/login')->with('error','Invalid login details');
        }
    }
	
	public function logout(){
		auth()->logout();
		return redirect('admin/login');
	}
	
	public function forgot(){
        return view('auth.forgot');
    }
	
	public function setPermissionFile($roleId,$userId){
		$path = storage_path('permission');
		if(!File::isDirectory($path)){
			File::makeDirectory($path, 0777, true, true);
		}
		$roleInfo = Roles::with('permission')->where('id',$roleId)->select('id','permission_id')->get()->first();
		$data = $roleInfo->permission['permission'];
		$fileName = $userId.'.json';
		$filePath = $path.'/'.$fileName;
		if(file_exists($filePath)){
			unlink($path.'/'.$fileName);
		}
		if(!file_exists($filePath)){
			File::put($path.'/'.$fileName,$data);
		}
		
		
	}
}
