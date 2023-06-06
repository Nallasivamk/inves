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
		<section id="multiple-column-form">
		  <div class="row match-height">
			<div class="col-2"></div>
			<div class="col-8">
			  <div class="card">
				<div class="card-header bg-color">
				  <h4 class="card-title">Add Bulk Product</h4>
				</div>
				{!! Form::open(['url' => url('admin/manage-product/product/add'),'id'=>'product','files'=>true]) !!}
					<?php $edit = 'add'; ?>
					@csrf
					@include('admin.product.form')
				{!! Form::close() !!}
			  </div>
			</div>
			<div class="col-2"></div>
		  </div>
		</section>
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