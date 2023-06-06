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
								<li class="breadcrumb-item active">Currency </li>
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
				  <h4 class="card-title">Add Currency </h4>
				</div>
				<?php echo Form::open(['url' => url('admin/manage-site/currency/add'),'id'=>'addPage','enctype' => 'multipart/form-data']); ?>

					<?php echo csrf_field(); ?>
					<?php echo $__env->make('admin.site.currency.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<?php echo Form::close(); ?>

			  </div>
			</div>
		  </div>
		</section>
	</div>
</div>
<!-- END: Content-->
<?php $__env->stopSection(); ?>
<?php $__env->startPush('script-function'); ?>
<script>
$(document).ready(function() {
    $('#currency').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
		excluded: [':disabled'],
        fields: {
            language: {
                message: 'Select language',
                validators: {
                    notEmpty: {
                        message: 'Select language'
                    }
                }
            },
			content: {
                message: 'Enter content',
                validators: {
					callback: {
						message: 'Enter content',
						callback: function(value, validator, $field) {
							if(CKEDITOR.instances.content.getData() == '')
								return false;
							else
								return true;
						}
					}
				}
            }
        }
    });
});

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('Admin.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Product\coreAdmin\resources\views/admin/site/currency/add.blade.php ENDPATH**/ ?>