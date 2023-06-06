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
								<li class="breadcrumb-item active">Site Setting</li>
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
				<div class="card-header bg-color">
				  <h4 class="card-title">Site Setting</h4>
				</div>
				<?php echo Form::model($settingInfo,['url' => url('admin/manage-setting/setting/update'),'id'=>'addSetting','enctype' => 'multipart/form-data']); ?>

					<input type="hidden" name="id" value="<?php echo e(App\Http\Helper\Admin\Helpers::encodeAndDecodeID($settingInfo->id,'encode')); ?>" />
					<?php echo $__env->make('admin.site.setting.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo Form::close(); ?>

			  </div>
			</div>
		  </div>
		</section>
	</div>
</div>
<!-- END: Content-->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('Admin.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Product\coreAdmin\resources\views/admin/site/setting/setting.blade.php ENDPATH**/ ?>