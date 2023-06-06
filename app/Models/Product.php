<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
	protected $table 	= 'product';
	protected $dates 	= ['deleted_at'];
	protected $fillable	 = ['platform_apps','warehouse_county','create_time','order_number','platform_sku','item_name','pic_code','seller_sku','variation','invoice_number','tax_code','branch_number','pay_method','paid_price','unit_price','seller_discount_total','shipping_fee','payable_total','commission_amount','wallet_credit','repayment','delivered_date','billing_name','billing_addr','billing_addr2','billing_addr3','billing_addr4','billing_addr5','billing_phone','billing_phone2','billing_city','billing_post_code','billing_country','shipping_provider','shipment_type_name','shipping_provider_type','tracking_code','shipping_provider_fm','status','refund_amount','created_by','updated_by'];
	
	public function role()
	{
		return $this->belongsTo('App\Models\Roles','role_id','id')->select('id','role');
	}
}
