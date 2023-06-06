<?php

namespace App\Http\Controllers\Admin\SubAdmin;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\Users;
use App\Models\Roles;
use DB;
use View;
use Hash;

class SubAdminController extends Controller
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
		$usersInfo = Users::with('role')->where('role_type','Subadmin')->whereNull('deleted_at')->get();
        return view('admin/subadmin/subadmin',compact('usersInfo'));
    }
	
	public function create()
    {
		$roles = Roles::whereNull('deleted_at')->where('status','Active')->pluck('role','id')->toArray();
        return view('admin/subadmin/add',compact('roles'));
    }
	
	public function store(Request $request){
		DB::beginTransaction();
		try{
			$request = $request::all();
			$request['name'] = $request['first_name'].' '.$request['last_name'];
			$request['role_type'] = 'Subadmin';
			$request['register_type'] = 'Admin';
			$request['password'] = Hash::make($request['password']);
			Users::create($request);
			DB::commit();
			return redirect('admin/manage-admin/admin-user')->with('success','Successfully user created');
		} catch(Exception $e) {
			DB::rollback();
			return View::make('admin/manage-admin/admin-user/create')->withInput()->with('error',$e->getMessage());
		}
	}
	
	public function edit($id)
    {
		$id = Helpers::encodeAndDecodeID($id,'decode');
		$usersInfo = Users::with('role')->whereNull('deleted_at')->where('id',$id)->select('id','first_name','last_name','email','role_id','status')->get()->first();
		$roles = Roles::whereNull('deleted_at')->where('status','Active')->pluck('role','id')->toArray();
		return view('admin/subadmin/edit',compact('usersInfo','roles'));
	}
	
	public function update(Request $request)
    {
		DB::beginTransaction();
		try{
			$request = $request::all();
			$id = Helpers::encodeAndDecodeID($request['id'],'decode');
			unset($request['_token']);
			$request['name'] = $request['first_name'].' '.$request['last_name'];
			if(isset($request['password']))
				$request['password'] = Hash::make($request['password']);
			Users::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage-admin/admin-user')->with('success','Successfully user updated');
		} catch(Exception $e) {
			DB::rollback();
			return View::make('admin/manage-admin/admin-user/create')->withInput()->with('error',$e->getMessage());
		}
	}
	
	public function destroy($id)
    {
        //
    }


	public function customer()
    {
		$usersInfo = Users::with('role')->where('role_type','Customer')->whereNull('deleted_at')->get();
        return view('admin/customer/customer',compact('usersInfo'));
    }
	
	public function customerCreate()
    {
		$roles = Roles::whereNull('deleted_at')->where('status','Active')->pluck('role','id')->toArray();
        return view('admin/customer/add',compact('roles'));
    }
	
	public function customerStore(Request $request){
		DB::beginTransaction();
		try{
			$request = $request::all();
			$request['name'] = $request['first_name'].' '.$request['last_name'];
			$request['role_type'] = 'Customer';
			$request['register_type'] = 'Admin';
			$request['password'] = Hash::make($request['password']);
			Users::create($request);
			DB::commit();
			return redirect('admin/manage-admin/customer')->with('success','Successfully customer created');
		} catch(Exception $e) {
			DB::rollback();
			return View::make('admin/manage-admin/customer/create')->withInput()->with('error',$e->getMessage());
		}
	}
	
	public function customerEdit($id)
    {
		$id = Helpers::encodeAndDecodeID($id,'decode');
		$usersInfo = Users::with('role')->whereNull('deleted_at')->where('id',$id)->select('id','first_name','last_name','email','role_id','status')->get()->first();
		$roles = Roles::whereNull('deleted_at')->where('status','Active')->pluck('role','id')->toArray();
		return view('admin/customer/edit',compact('usersInfo','roles'));
	}
	
	public function customerUpdate(Request $request)
    {
		DB::beginTransaction();
		try{
			$request = $request::all();
			$id = Helpers::encodeAndDecodeID($request['id'],'decode');
			unset($request['_token']);
			$request['name'] = $request['first_name'].' '.$request['last_name'];
			if(isset($request['password']))
				$request['password'] = Hash::make($request['password']);
			Users::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage-admin/customer')->with('success','Successfully customer updated');
		} catch(Exception $e) {
			DB::rollback();
			return View::make('admin/manage-admin/customer/create')->withInput()->with('error',$e->getMessage());
		}
	}
}
