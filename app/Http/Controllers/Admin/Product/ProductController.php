<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller as Controller;
use App\Http\Helper\Admin\Helpers as Helpers;
use Request;
use App\Models\Product;
use App\Models\Roles;
use DB;
use View;
use Hash;

class ProductController extends Controller
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
		$productInfo = Product::whereNull('deleted_at')->get();
        return view('admin/product/product',compact('productInfo'));
    }

	public function create(){
		return view('admin/product/add');
	}

    public function add(Request $request){
        DB::beginTransaction();
		try{
			$request = $request::all();
            if (Request::hasFile('product_csv')){
                $dataArr = [];
                $file = Request::file('product_csv');
                $row = 1;
                if (($handle = fopen($file, "r")) !== FALSE) {
                while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                    if($row == 1){
                        $temp = $data;
                    }else{
                        $dataArr = array_combine($temp,$data);
                        Product::create($dataArr);
                    }
                    $row++;
                }
                fclose($handle);
                }
                
            }
            DB::commit();
			return redirect('admin/manage-product/product')->with('success','Successfully added product');
        } catch(Exception $e) {
			DB::rollback();
			return View::make('admin/manage-product/product/create')->withInput()->with('error',$e->getMessage());
		}
    }
	
	
}
