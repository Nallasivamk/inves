 
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
		<section id="multiple-column-form">
		  <div class="row match-height">
			<div class="col-2"></div>
			<div class="col-8">
			  <div class="card">
				<div class="card-header bg-color">
				  <h4 class="card-title">Add User</h4>
				</div>
				<?php echo Form::open(['url' => url('admin/manage-admin/customer/add'),'id'=>'adminUser']); ?>

					<?php $edit = 'add'; ?>
					<?php echo csrf_field(); ?>
					<?php echo $__env->make('admin.customer.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo Form::close(); ?>

			  </div>
			</div>
			<div class="col-2"></div>
		  </div>
		</section>
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
<?php echo $__env->make('admin.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/admin/customer/add.blade.php ENDPATH**/ ?>