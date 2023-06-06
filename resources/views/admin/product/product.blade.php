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
								<li class="breadcrumb-item active">Product </li>
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
							   <h5 class="card-title ">Product</h5>
							   <div class="heading-elements">
								  <div id="heading5" class="card bg-fliter-color" data-toggle="collapse" data-target="#accordion5" aria-expanded="false"
									 aria-controls="accordion5" role="tablist">
										@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','customer','Add'))
									 		<a href="{{ url('admin/manage-product/product/create') }}" class="text-right"><i class='bx bx-plus-circle size bx-fade' ></i>Product Upload</a>
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
											<th>Product Name</th>
											<th>Invoice Number</th>
											<th>Branch Number</th>
											<th>Paid Price</th>
											<th>Unit Price</th>
											<th>Tracking Code</th>
											<th>Status</th>
											@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Customer','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Customer','Delete'))
												<th>ACTION</th>
											@endif
											</tr>
										</thead>
										<tbody>
										@foreach($productInfo as $list)
											<tr>
												<td class="text-bold-500">{{ $list->item_name }}</td>
												<td>{{ $list->invoice_number }}</td>
												<td class="text-bold-500">{{ $list->branch_number }}</td>
												<td class="text-bold-500">{{ $list->paid_price }}</td>
												<td class="text-bold-500">{{ $list->unit_price }}</td>
												<td class="text-bold-500">{{ $list->tracking_code }}</td>
												<td>{{ $list->status }}</td>
												
												<td>
												@php $id = App\Http\Helper\Admin\Helpers::encodeAndDecodeID($list->id,'encode'); @endphp
												<!--<a href="{{ url('admin/manage-product/product/'.$id.'/edit') }}"><i
													class="badge-circle badge-circle-light-secondary bx bx-notepad font-medium-1"></i>
													</a>-->
												<a href="javascript:void(0)"><i
													class="bx bx-notepad font-medium-1"></i>
													</a>
												
												<a href="javascript:void(0)"><i
													class="bx bx-notepad font-medium-1"></i>
													</a>
												</td>
												
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