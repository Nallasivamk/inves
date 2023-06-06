<?php

namespace App\Http\Controllers\Admin\SubAdmin;

use Request;
use App\Http\Controllers\Controller as Controller;
use App\Models\Modules as Modules;
use App\Models\Permission as Permission;
use App\Models\Roles as Roles;
use View;
use DB;
use Auth;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$roleInfo = Roles::with('user')->whereNull('deleted_at')->get();
        return view('admin/subadmin/permission/permission',compact('roleInfo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
		$modules = Modules::with('submodules')->whereNull('deleted_at')->get();
        return view('admin/subadmin/permission/add',compact('modules'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
		DB::beginTransaction();
		try {
			$request = $request::all();
			$dataArr['role'] = $request['role'];	 
			$dataArr['role_desc'] = $request['role_desc']; 
			$dataArr['status'] = $request['status']; 
			$dataArr['created_by'] = Auth::user()->id; 
			$roleInfo = Roles::create($dataArr);
			unset($request['role']);
			unset($request['role_desc']);
			unset($request['status']);
			unset($request['_token']);
			$moduleArr = $moduleUrl = [];
			foreach($request as $key => $list){
				$temp = explode('-XX00XX-',$key);
				if(strpos($temp[1], '_-_') !== false) {
					$innerTemp = explode('_-_',$temp[1]);
					if(strpos($innerTemp[1], '_/_') !== false){
						$iconTemp = explode('_/_',$innerTemp[1]);
					}else{
						$iconTemp[0] = $innerTemp[1];
					}
				}
				if(isset($iconTemp[0]))
					$moduleArr[$temp[0]][$innerTemp[0]][$iconTemp[0]] = $iconTemp[0];
				if(isset($iconTemp[1]))
					$moduleArr[$temp[0]][$innerTemp[0]][$iconTemp[1]] = $iconTemp[1];
				
				$base = strtolower(str_replace('_','-',$temp[0]));
				$subBase = strtolower(str_replace('_/_','-',$innerTemp[0]));
				$moduleUrl[$base][$subBase] = $subBase;
			}
			$permissionArray['module'] = json_encode($moduleArr);
			$permissionArray['url'] = json_encode($moduleArr);
			$permissionInfo = Permission::create(array('permission'=>json_encode($permissionArray)));
			Roles::where('id',$roleInfo->id)->update(['permission_id'=>$permissionInfo->id]);
			DB::commit();
			return redirect('admin/manage-admin/admin-roles')->with('success','Succesfully added new role');
		}catch(Exception $e) {
			DB::rollback();
			return View::make('admin/subadmin/permission/add')->withInput()->with('error',$e->getMessage());
		}
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $modules = Modules::with('submodules')->whereNull('deleted_at')->get();
		$roleInfo = Roles::with('permission')->where('id',$id)->get()->first();
        return view('admin/subadmin/permission/edit',compact('modules','roleInfo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       DB::beginTransaction();
		try {
			$request = $request::all();
			
			$id = $request['id'];
			$dataArr['role'] = $request['role'];	 
			$dataArr['role_desc'] = $request['role_desc']; 
			$dataArr['status'] = $request['status']; 
			$dataArr['updated_by'] = Auth::user()->id; 
			$roleInfo = Roles::where('id',$id);
			$roleUpdate = $roleInfo->update($dataArr);
			$role = $roleInfo->get()->first();
			unset($request['role']);
			unset($request['role_desc']);
			unset($request['status']);
			unset($request['_token']);
			unset($request['id']);
			$moduleArr = $moduleUrl = [];
			foreach($request as $key => $list){
				$temp = explode('-XX00XX-',$key);
				if(strpos($temp[1], '_-_') !== false) {
					$innerTemp = explode('_-_',$temp[1]);
					if(strpos($innerTemp[1], '_/_') !== false){
						$iconTemp = explode('_/_',$innerTemp[1]);
					}else{
						$iconTemp[0] = $innerTemp[1];
					}
				}
				if(isset($iconTemp[0]))
					$moduleArr[$temp[0]][$innerTemp[0]][$iconTemp[0]] = $iconTemp[0];
				if(isset($iconTemp[1]))
					$moduleArr[$temp[0]][$innerTemp[0]][$iconTemp[1]] = $iconTemp[1];
				
				$base = strtolower(str_replace('_','-',$temp[0]));
				$subBase = strtolower(str_replace('_/_','-',$innerTemp[0]));
				$moduleUrl[$base][$subBase] = $subBase;
			}
			$permissionArray['module'] = json_encode($moduleArr);
			$permissionArray['url'] = json_encode($moduleArr);
			$permissionInfo = Permission::where('id',$role->permission_id)->update(array('permission'=>json_encode($permissionArray)));
			DB::commit();
			return redirect('admin/manage-admin/admin-roles')->with('success','Succesfully updated role');
		}catch(Exception $e) {
			DB::rollback();
			return View::make('admin/subadmin/permission/10/edit')->withInput()->with('error',$e->getMessage());
		}
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
	
	
}
