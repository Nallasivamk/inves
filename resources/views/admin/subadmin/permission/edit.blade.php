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
								<li class="breadcrumb-item active">Edit Role & Permission</li>
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
		<section id="multiple-column-form">
		  <div class="row match-height">
			<div class="col-12">
			  <div class="card">
				<div class="card-header">
				  <h4 class="card-title">Edit Role & Permission</h4>
				</div>
				{!! Form::model($roleInfo,['url' =>  url("admin/manage-admin/admin-roles/update") ,'method' => 'post','id'=>'role']) !!}
					<input type="hidden" name="id" value="{{ $roleInfo->id }}" />
					@include('admin.subadmin.permission.form')
				{!! Form::close() !!}
			  </div>
			</div>
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