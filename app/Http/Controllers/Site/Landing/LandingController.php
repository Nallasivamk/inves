<?php

namespace App\Http\Controllers\Site\Landing;

use App\Http\Controllers\Controller;
use App\Models\Product;

class LandingController extends Controller
{
    public function index(){
        $topProduct = Product::whereNull('deleted_at')->get();
        $data = [];
        foreach($topProduct as $list){
            $data['top'][$list->order_number][$list->id]['id'] = $list->id;
            $data['top'][$list->order_number][$list->id]['platform_apps'] = $list->platform_apps;
            $data['top'][$list->order_number][$list->id]['item_name'] = $list->item_name;
            $data['top'][$list->order_number][$list->id]['branch_number'] = $list->branch_number;
            $data['top'][$list->order_number][$list->id]['paid_price'] = $list->paid_price;
            $data['top'][$list->order_number][$list->id]['warehouse_county'] = $list->warehouse_county;
            $data['top'][$list->order_number][$list->id]['variation'] = $list->variation;
            $data['top'][$list->order_number][$list->id]['invoice_number'] = $list->invoice_number;
            $data['top'][$list->order_number][$list->id]['pic_code'] = $list->pic_code;
            $data['top'][$list->order_number][$list->id]['order_number'] = $list->order_number;
        }

        $dealProduct = Product::whereNull('deleted_at')->get();
        foreach($dealProduct as $list){
            $data['deal'][$list->order_number][$list->id]['id'] = $list->id;
            $data['deal'][$list->order_number][$list->id]['platform_apps'] = $list->platform_apps;
            $data['deal'][$list->order_number][$list->id]['item_name'] = $list->item_name;
            $data['deal'][$list->order_number][$list->id]['branch_number'] = $list->branch_number;
            $data['deal'][$list->order_number][$list->id]['paid_price'] = $list->paid_price;
            $data['deal'][$list->order_number][$list->id]['warehouse_county'] = $list->warehouse_county;
            $data['deal'][$list->order_number][$list->id]['variation'] = $list->variation;
            $data['deal'][$list->order_number][$list->id]['invoice_number'] = $list->invoice_number;
            $data['deal'][$list->order_number][$list->id]['pic_code'] = $list->pic_code;
            $data['deal'][$list->order_number][$list->id]['order_number'] = $list->order_number;
        }
        
        return view('site.landing.landing',compact('data'));
    }

}