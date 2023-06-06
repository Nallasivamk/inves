 
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
								<li class="breadcrumb-item active">Slider</li>
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
				  <h4 class="card-title">Edit Slider</h4>
				</div>
				<?php echo Form::model($staticPageInfo,['url' => url('admin/manage-site/currency/update'),'id'=>'addCurrency','enctype' => 'multipart/form-data']); ?>

					<input type="hidden" name="id" value="<?php echo e(App\Http\Helper\Admin\Helpers::encodeAndDecodeID($staticPageInfo->id,'encode')); ?>" />
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
<script src="<?php echo e(asset('js/admin/js/ckeditor/ckeditor.js')); ?>"></script>
<script>
CKEDITOR.replace( 'content' );
$(document).ready(function() {
    $('#addCurrency').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: '',
            invalid: '',
            validating: ''
        },
		excluded: [':disabled'],
        fields: {
            name: {
                message: 'Enter Curreny',
                validators: {
                    notEmpty: {
                        message: 'Enter Curreny'
                    }
                }
            },
			code: {
                message: 'Enter Code',
                validators: {
                    notEmpty: {
                        message: 'Enter Code'
                    }
                }
            },
			symbol: {
                message: 'Enter Symbol',
                validators: {
                    notEmpty: {
                        message: 'Enter Symbol'
                    }
                }
            },
			exchange_rate: {
                message: 'Enter exchange rate',
                validators: {
                    notEmpty: {
                        message: 'Enter exchange rate'
                    }
                }
            }
        }
    });
});

CKEDITOR.instances.content.on('change', function() { 
	$('#addPage').bootstrapValidator('revalidateField', 'content');
});

</script>
<?php $__env->stopPush(); ?>
<?php echo $__env->make('admin.main.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Trivizion\Outsourcing\invesment\resources\views/admin/site/currency/edit.blade.php ENDPATH**/ ?>