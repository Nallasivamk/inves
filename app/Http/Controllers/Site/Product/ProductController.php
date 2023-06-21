<?php

namespace App\Http\Controllers\Site\Product;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Http\Helper\Admin\Helpers as Helpers;

class ProductController extends Controller
{
    public function product(){
        return view('site.product.product');
    }

    public function product_detail($order_number){
        $order_number = Helpers::encodeAndDecodeID($order_number,'decode');
        $productInfo = Product::where('order_number',$order_number)->get();
        $data = [];
        foreach($productInfo as $list){
            $data[$list->id]['platform_apps'] = $list->platform_apps;
            $data[$list->id]['warehouse_county'] = $list->warehouse_county;
            $data[$list->id]['create_time'] = $list->create_time;
            $data[$list->id]['order_number'] = $list->order_number;
            $data[$list->id]['platform_sku'] = $list->platform_sku;
            $data[$list->id]['item_name'] = $list->item_name;
            $data[$list->id]['pic_code'] = $list->pic_code;
            $data[$list->id]['seller_sku'] = $list->seller_sku;
            $data[$list->id]['variation'] = $list->variation;
            $data[$list->id]['invoice_number'] = $list->invoice_number;
            $data[$list->id]['tax_code'] = $list->tax_code;
            $data[$list->id]['branch_number'] = $list->branch_number;
            $data[$list->id]['pay_method'] = $list->pay_method;
            $data[$list->id]['paid_price'] = $list->paid_price;
            $data[$list->id]['unit_price'] = $list->unit_price;
            $data[$list->id]['seller_discount_total'] = $list->seller_discount_total;
            $data[$list->id]['shipping_fee'] = $list->shipping_fee;
            $data[$list->id]['payable_total'] = $list->payable_total;
            $data[$list->id]['commission_amount'] = $list->commission_amount;
            $data[$list->id]['wallet_credit'] = $list->wallet_credit;
            $data[$list->id]['repayment'] = $list->repayment;
            $data[$list->id]['delivered_date'] = $list->delivered_date;
            $data[$list->id]['tracking_code'] = $list->tracking_code;
            $data[$list->id]['status'] = $list->status;
            $data[$list->id]['refund_amount'] = $list->refund_amount;


        }
        
        return view('site.product.product_detail',compact('data'));
    }
//Grid View start 
    public function gridProduct(){
        return view('site.product.grid_product');
    }

    public function gridProductDetail($order_number){
        $order_number = Helpers::encodeAndDecodeID($order_number,'decode');
        $productInfo = Product::where('order_number',$order_number)->get();
        $data = [];
        foreach($productInfo as $list){
            $data[$list->id]['platform_apps'] = $list->platform_apps;
            $data[$list->id]['warehouse_county'] = $list->warehouse_county;
            $data[$list->id]['create_time'] = $list->create_time;
            $data[$list->id]['order_number'] = $list->order_number;
            $data[$list->id]['platform_sku'] = $list->platform_sku;
            $data[$list->id]['item_name'] = $list->item_name;
            $data[$list->id]['pic_code'] = $list->pic_code;
            $data[$list->id]['seller_sku'] = $list->seller_sku;
            $data[$list->id]['variation'] = $list->variation;
            $data[$list->id]['invoice_number'] = $list->invoice_number;
            $data[$list->id]['tax_code'] = $list->tax_code;
            $data[$list->id]['branch_number'] = $list->branch_number;
            $data[$list->id]['pay_method'] = $list->pay_method;
            $data[$list->id]['paid_price'] = $list->paid_price;
            $data[$list->id]['unit_price'] = $list->unit_price;
            $data[$list->id]['seller_discount_total'] = $list->seller_discount_total;
            $data[$list->id]['shipping_fee'] = $list->shipping_fee;
            $data[$list->id]['payable_total'] = $list->payable_total;
            $data[$list->id]['commission_amount'] = $list->commission_amount;
            $data[$list->id]['wallet_credit'] = $list->wallet_credit;
            $data[$list->id]['repayment'] = $list->repayment;
            $data[$list->id]['delivered_date'] = $list->delivered_date;
            $data[$list->id]['tracking_code'] = $list->tracking_code;
            $data[$list->id]['status'] = $list->status;
            $data[$list->id]['refund_amount'] = $list->refund_amount;


        }
        
        return view('site.product.grid_product_detail',compact('data'));
    }
}
