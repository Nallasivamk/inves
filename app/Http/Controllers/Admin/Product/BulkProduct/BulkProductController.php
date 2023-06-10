<?php

namespace App\Http\Controllers\Admin\Product\BulkProduct;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\BulkProduct;
use App\Models\Roles;
use DB;
use View;
use Hash;
use Auth;


class BulkProductController extends Controller
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
		$bulkproductInfo = BulkProduct::whereNull('deleted_at')->get();
        return view('admin/product/bulk_product/bulk_product',compact('bulkproductInfo'));
    }
	
	public function create()
    {
		$roles = Roles::whereNull('deleted_at')->where('status','Active')->pluck('role','id')->toArray();
        return view('admin/product/bulk_product/add',compact('roles'));
    }
	
	public function store(Request $request){
		//$request = $request::all();//dd($request);
		
		
		try{
			$request = $request::all();
			$request['bulk_product_name'] = $request['bulk_product_name'];			
			$request['description'] = @$request['description']? $request['description']:'';			
			$request['invest_amount'] = $request['invest_amount'];			
			$request['return_amount'] = $request['return_amount'];			
			$request['status'] = $request['status'];			
			//Image upload
			$imageName = time().'.'.$request['image']->extension();       
        	$request['image']->move(public_path('/images/bulk_products'), $imageName);
			$request['bulk_product_image']= '/images/bulk_products/'.$imageName;
			$request['created_by'] = Auth::user()->id;
			//dd($request);

			BulkProduct::create($request);
			DB::commit();
			return redirect('admin/product/bulk_product/bulk_product')->with('success','Successfully Added Bulk Product');
		} catch(Exception $e) {
			DB::rollback();
			return View::make('admin/product/bulk_product/create')->withInput()->with('error',$e->getMessage());
		}
	}
	
	public function edit($id)
    {
		$id = Helpers::encodeAndDecodeID($id,'decode');
		$usersInfo = BulkProduct::with('role')->whereNull('deleted_at')->where('id',$id)->get()->first();
		$roles = Roles::whereNull('deleted_at')->where('status','Active')->pluck('role','id')->toArray();
		return view('admin/product/bulk_product/edit',compact('usersInfo','roles'));
	}
	
	public function update(Request $request)
    {
		DB::beginTransaction();
		try{
			$request = $request::all();
			unset($request['_token']);
			$request['id'] = $id = Helpers::encodeAndDecodeID($request['id'],'decode');
			$request['bulk_product_name'] = $request['bulk_product_name'];			
			$request['description'] = @$request['description']? $request['description']:'';			
			$request['invest_amount'] = $request['invest_amount'];			
			$request['return_amount'] = $request['return_amount'];			
			$request['status'] = $request['status'];
				if(!empty($request['image'])){				
					$imageName = time().'.'.$request['image']->extension();       
					$request['image']->move(public_path('/images/bulk_products'), $imageName);
					$request['bulk_product_image']= '/images/bulk_products/'.$imageName;
				} else {					
					$img = BulkProduct::where('id',$id)->select('bulk_product_image')->first();
					$request['bulk_product_image']  = $img->bulk_product_image;
				}unset($request['image']);
				$request['updated_by'] = Auth::user()->id;
				BulkProduct::where('id',$id)->update($request);
				DB::commit();
				return redirect('admin/manage_bulk_product/bulk_product')->with('success','Successfully Updated Bulk Product');
//			}
		} catch(Exception $e) {
			DB::rollback();
			return View::make('admin/manage_bulk_product/'.$request["id"].'/edit')->withInput()->with('error',$e->getMessage());
		}
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

}
