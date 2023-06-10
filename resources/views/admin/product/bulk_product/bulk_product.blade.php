@extends('admin.main.app')
 
@section('content')

<!-- BEGIN: Content-->
<div class="app-content content">
	<div class="content-overlay"></div>
	<div class="content-wrapper">
		<div class="content-header row">
			<div class="content-header-left col-12 mb-2 mt-1">
				<div class="row breadcrumbs-top">
					<div class="col-12">
						<div class="breadcrumb-wrapper col-12">
							<ol class="breadcrumb p-0 mb-0">
								<li class="breadcrumb-item"><a href="{{ url('admin/dashboard/dashboard') }}"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item active">Bulk Product </li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="content-body horizontal-border"><!-- Basic Tables start -->
			<div class="row" id="basic-table">
				<div class="col-12">
					<div class="card">
						<div class="card-header bg-color">
							<div class="row">
							   <h5 class="card-title ">Bulk Product</h5>
							   <div class="heading-elements">
							   <div id="heading5" class="card bg-fliter-color" data-toggle="collapse" data-target="#accordion5" aria-expanded="false"
									 aria-controls="accordion5" role="tablist">
										@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','bulkProduct','Add'))
									 		<a href="{{ url('admin/manage_bulk_product/bulk_product/create') }}" class="text-right"><i class='bx bx-plus-circle size bx-fade' ></i>New Bulk Product</a>
										@endif
								  </div>
							   </div>
							</div>
						 </div>
						
						<div class="card-content">
							<div class="card-body">
								
								<div class="table-responsive">
									<table class="table table-bordered" id="myTable">
										<thead>
											<tr>
											<th>Bulk Product Name</th>
											<th>Image</th>
											<th>Invest Amount</th>
											<th>Return Amount</th>
											<th>Created By</th>
											<th>Status</th>
											@if(App\Http\Helper\Admin\Helpers::checkModulePermission('manage_bulk_product','BulkProduct','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('manage_bulk_product','BulkProduct','Delete'))
												<th>ACTION</th>
											@endif
											</tr>
										</thead>
										<tbody>
										@foreach($bulkproductInfo as $list)
											<tr>
												<td class="text-bold-500">{{ $list->bulk_product_name }}</td>
												<td class="image product-thumbnail pt-10" style="width:12% !important">
												@if(!empty($list->bulk_product_image))
													<img src="{{ asset($list->bulk_product_image) }}"style="width:70px;height:70px" alt="Bulk product ">
												@else
													-Nil-			
												@endif
											</td>
											<td class="text-bold-500">{{number_format($list->invest_amount,2) }}</td>
                           					<td class="text-bold-500">{{ number_format($list->return_amount,2) }}</td>												
											<td class="text-bold-500">{{ $list->created_by }}</td>
											<td>{{ $list->status }}</td>
												
												@if(App\Http\Helper\Admin\Helpers::checkModulePermission('manage_bulk_product','BulkProduct','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('manage_bulk_product','BulkProduct','Delete'))
													<td>
													@php $id = App\Http\Helper\Admin\Helpers::encodeAndDecodeID($list->id,'encode'); @endphp
													
													@if(App\Http\Helper\Admin\Helpers::checkModulePermission('manage_bulk_product','BulkProduct','Update'))
														<a href="{{ url('admin/manage_bulk_product/bulk_product/'.$id.'/edit') }}"><i
														class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i>
														</a>
													@endif<!--
													@if(App\Http\Helper\Admin\Helpers::checkModulePermission('manage_bulk_product','BulkProduct','Delete'))
														<a href="{{ url('admin/manage_bulk_product/bulk_product/'.$id.'/delete') }}><i
														class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i>
														</a>
													@endif-->
													</td>
												@endif
												
											</tr>
										@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- END: Content-->
@endsection
@push('script-function')
<script>
$(document).ready( function () {
    $('#myTable').DataTable({
		 fixedHeader: true
	});
} );
</script>
@endpush