<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\CategoryProduct;
use App\Models\Roles;
use DB;
use View;
use Hash;
use Auth;


class CategoryProductController extends Controller
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
		return view('admin/product/category/category');
    }
	
	public function indexData()
    {
		$currencyInfo = CategoryProduct::whereNull('deleted_at')->get();
		return datatables()->of($currencyInfo)
		 ->addIndexColumn()
		
		->addColumn('action', function($row){
				$id  = Helpers::encodeAndDecodeID($row->id,'encode');
				$url = url('/').'/admin/manage_category_product/category/'.$id.'/edit';
				if(Helpers::checkModulePermission('Manage_Admin','Role','Update')){
					$btn = '<a href="'.$url.'"><i class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></a><a href="#"><i class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i> </a>';				
				}
				return $btn;
                  })
		->rawColumns(['action'])
		
		->make(true);
    }
	
	public function create()
    {
		
        return view('admin/product/category/add');
    }
	
	public function store(Request $request){
		DB::beginTransaction();
		try{
			$request = $request::all();
			unset($request['_token']);
			$request['created_by'] = Auth::user()->id;
			CategoryProduct::create($request);
			DB::commit();
			return redirect('admin/manage_category_product/category')->with('success','Successfully Category created');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage_category_product/category')->with('success','Something went wrong');
		}
	}
	
	public function edit($id)
    {
		$id = Helpers::encodeAndDecodeID($id,'decode');
		$staticPageInfo = CategoryProduct::where('id',$id)->whereNull('deleted_at')->get()->first();//dd($staticPageInfo);
		return view('admin/product/category/edit',compact('staticPageInfo'));
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
			CategoryProduct::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage_category_product/category')->with('success','Successfully category updated');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage_category_product/category')->with('success','Something went wrong');
		}
	}
}
