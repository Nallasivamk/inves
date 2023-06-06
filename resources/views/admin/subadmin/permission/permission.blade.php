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
								<li class="breadcrumb-item active">Role & Permission </li>
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
						<div class="card-header">
						  <h5 class="card-title">Role & Permission</h5>
						  @if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Add'))
							  <div class="heading-elements">
								 <a href="{{ url('admin/manage-admin/admin-roles/create') }}" class="btn btn-icon btn-success"><i class='bx bx-plus bx-tada' ></i> Role & Permission</a>
							  </div>
						  @endif
						</div>
						<div class="card-content">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table table-bordered" id="myTable">
										<thead>
											<tr>
											<th>Role</th>
											<th>Description</th>
											<th>User</th>
											@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Delete'))
												<th>Action</th>
											@endif
											</tr>
										</thead>
										<tbody>
										@foreach($roleInfo as $list)
											<tr>
												<td class="text-bold-500">{{ $list->role }}</td>
												<td>{{ $list->role_desc }}</td>
												<td class="text-bold-500">{{  $list->user['name'] }}</td>
												@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Delete'))
													<td>
													@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Update'))
														<a href="{{ url('admin/manage-admin/admin-roles/'.$list->id.'/edit') }}"><i
														class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i></a>
													@endif
													@if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Role','Delete'))
														<a href="#"><i
														class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i></a>
													@endif
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