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
								<li class="breadcrumb-item active">Category </li>
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
								<h5 class="card-title ">Category</h5>
								<div class="heading-elements">
								   <div id="heading5" class="card bg-fliter-color" data-toggle="collapse" data-target="#accordion5" aria-expanded="false"
									  aria-controls="accordion5" role="tablist">
									  <span class="">
									  <a href="{{ url('admin/manage_category_product/category/create') }}" class="text-right"><i class='bx bx-plus-circle size bx-fade' ></i>New Category</a>
							
									  </span>
								   </div>
								</div>
							 </div>
						  </div>
						<div class="card-content">
							<div class="card-body">
							
								<div class="col-lg-12">
								
								<div class="table-responsive" style="margin-right:10px">
									<table class="table table-bordered" id="currencyTable" style="width:100% !important">
										<thead>
											<tr>
												<th>Category</th>
												<th>Code</th>
												<th>Status</th>
												<th>ACTION</th>
											</tr>
										</thead>
										<tbody>
										
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
</div>
<!-- END: Content-->
@endsection
@push('script-function')
<script>
$(function(){
   	
   	var table = $('#currencyTable').DataTable({
   		processing: true,
   		serverSide: true,
   		searching: false, 
   		lengthChange: false,
   		pageLength: 50,
   		ajax:{
   			url: "{{ url('admin/manage_category_product/category/indexData') }}",
   			data: function (d) {
                   d.test = 'testse'
               }
   		},
   		columns:[
   			{
   				data: 'category_name',
   				name: 'category_name'
   			},
   			{
   				data: 'code',
   				name: 'code'
   			},
   			{
   				data: 'status',
   				name: 'status'
   			},
   			{
   				data: 'action',
   				name: 'action'
   			}
   		]
   	})
   
   	$(document).on('click','.js-filter-listing',function(){
   		table.ajax.reload();
   	})
   });
</script>
@endpush