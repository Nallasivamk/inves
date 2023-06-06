<?php $__env->startSection('content'); ?>

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
								<li class="breadcrumb-item"><a href="<?php echo e(url('admin/dashboard/dashboard')); ?>"><i class="bx bx-home-alt"></i></a></li>
								<li class="breadcrumb-item active">Admin Users </li>
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
						  <h5 class="card-title">Admin Users</h5>
						  <?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Add')): ?>
							  <div class="heading-elements">
								 <a href="<?php echo e(url('admin/manage-admin/admin-user/create')); ?>" class="btn btn-icon btn-success"><i class='bx bx-user-plus bx-tada' ></i> User</a>
							  </div>
						  <?php endif; ?>
						</div>
						<div class="card-content">
							<div class="card-body">
								<div class="table-responsive">
									<table class="table" id="myTable">
										<thead>
											<tr>
											<th>First Name</th>
											<th>Last Name</th>
											<th>Email</th>
											<th>Role</th>
											<th>Status</th>
											<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Delete')): ?>
												<th>ACTION</th>
											<?php endif; ?>
											</tr>
										</thead>
										<tbody>
										<?php $__currentLoopData = $usersInfo; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $list): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
											<tr>
												<td class="text-bold-500"><?php echo e($list->first_name); ?></td>
												<td><?php echo e($list->last_name); ?></td>
												<td class="text-bold-500"><?php echo e($list->email); ?></td>
												<td><?php echo e($list->role['role']); ?></td>
												<td><?php echo e($list->status); ?></td>
												<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Update') || App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Delete')): ?>
													<td>
													<?php $id = App\Http\Helper\Admin\Helpers::encodeAndDecodeID($list->id,'encode'); ?>
													
													<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Update')): ?>
														<a href="<?php echo e(url('admin/manage-admin/admin-user/'.$id.'/edit')); ?>"><i
														class="badge-circle badge-circle-light-secondary bx bx-edit font-medium-1"></i>
														</a>
													<?php endif; ?>
													<?php if(App\Http\Helper\Admin\Helpers::checkModulePermission('Manage_Admin','Admin_user','Delete')): ?>
														<a href="#"><i
														class="badge-circle badge-circle-light-secondary bx bx-trash font-medium-1"></i>
														</a>
													<?php endif; ?>
													</td>
												<?php endif; ?>
											</tr>
										<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-function'); ?>
<script>
$(document).ready( function () {
    $('#myTable').DataTable({
		 fixedHeader: true
	});
} );
</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('Admin.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Trivizion\CoreAdmin\resources\views/admin/subadmin/subadmin.blade.php ENDPATH**/ ?>