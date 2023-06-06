<?php

namespace App\Http\Controllers\Admin\Site\Currency;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\Currency;
use DB;
use Auth;
use View;
use Hash;

class CurrencyController extends Controller
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
		return view('admin/site/currency/currency');
    }
	
	public function indexData()
    {
		$currencyInfo = Currency::whereNull('deleted_at')->get();
		return datatables()->of($currencyInfo)
		 ->addIndexColumn()
		
		->addColumn('action', function($row){
				$id  = Helpers::encodeAndDecodeID($row->id,'encode');
				$url = url('/').'/admin/manage-site/currency/'.$id.'/edit';
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
		
        return view('admin/site/currency/add');
    }
	
	public function store(Request $request){
		DB::beginTransaction();
		try{
			$request = $request::all();
			unset($request['_token']);
			$request['created_by'] = Auth::user()->id;
			Currency::create($request);
			DB::commit();
			return redirect('admin/manage-site/currency')->with('success','Successfully currency created');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage-site/currency')->with('success','Something went wrong');
		}
	}
	
	public function edit($id)
    {
		$id = Helpers::encodeAndDecodeID($id,'decode');
		$staticPageInfo = Currency::where('id',$id)->whereNull('deleted_at')->get()->first();
		return view('admin/site/currency/edit',compact('staticPageInfo'));
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
			Currency::where('id',$id)->update($request);
			DB::commit();
			return redirect('admin/manage-site/currency')->with('success','Successfully currency updated');
		} catch(Exception $e) {
			DB::rollback();
			return redirect('admin/manage-site/currency')->with('success','Something went wrong');
		}
	}
	
	
}
